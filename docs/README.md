# Documentation
## Functions
| Function        | Description           | route  | method
| -------------|:-----|:--------------------------|:----------------------|
| [upload](#upload)    | upload file ไปยัง Storage Service | `upload`| `POST` |
| [download](#download)     | download file จาก Storage Service เข้าสู่ device |   `files/{slug}` | `GET` |
| [store](#store) | store file จาก Storage Service เข้าสู่ folder storage ของ client |    `files/{slug}`| `GET` |
| [put-file](#put-file) |  update file ที่อยู่แล้วใน Storage Service  |   `put-file` | `POST` |
| [delete-file](#delete-file) | บ file ใน Storage Service   |  `delete-file`  | `POST` |
| [delete-folder](#delete-folder) | บ folder ใน Storage Service  |   `delete-folder` | `POST` |


### upload
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| file   |`true`| ไฟล์ที่ต้องการ upload | upload ไฟล์ได้ไม่เกินครั้ง 10 mb|
| state   |`true`| folder ของ Storage Service ที่ต้องการเก็บไฟล์ โดยส่งคำว่า `public` หรือ `local`| หากต้องการเก็บไฟล์ที่สามารถดูผ่าน Browser ได้ให้เก็บไฟล์ไว้ที่ `public` |
| sub_folder   |`false`| เพิ่ม sub folder ภายใต้ folder ที่สร้างขึ้นใน Storage Service  ||

### download
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| slug   |`true`| value ที่ใช้แทน id ของไฟล์ | จะได้รับ slug หลังจากทำการ upload ไฟล์แล้ว|

### store
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| slug   |`true`| value ที่ใช้แทน id ของไฟล์ ||

### put-file
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| method ของการ update file โดยมีค่าเท่ากับ `put` ||
| slug   |`true`| value ที่ใช้แทน id ของไฟล์||
| file   |`true`| file ใหม่ที่ต้องการส่ง|

### delete-file
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| method ของการลบ file โดยมีค่าเท่ากับ `delete` ||
| slug   |`true`| value ที่ใช้แทน id ของไฟล์||

### delete-folder
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| method ของการลบ folder โดยมีค่าเท่ากับ `delete` | method's value is `delete`|
| state   |`true`| folder ของ Storage Service ที่ต้องการลบ folderโดยส่งคำว่า `public` หรือ `local` ||
| folder   |`false`| ชื่อของ folder ที่ต้องการลบ ||

## Example of uploading file by PHP with GuzzleHttp
```php
Route::post('/upload', function() {
    $client = new GuzzleHttp\Client([
        'base_uri' =>'https://little-fortune.me/storage-service/',
        'timeout'  => 8.0,
    ]);
    $response = $client->post('upload', [
        'headers' => [
            'Accept' => 'application/json',
            'token'  => app_token, 
            'secret' => app_secret
        ],
        'multipart' => [
            [
                'name'     => 'state',
                'contents' => 'public'
            ],
            [
                'name'     => 'file',
                'contents' => fopen(request()->file('file'),'r+'),
            ],
            [
                'name'     => 'sub_path',
                'contents' => 'pdf',
            ]
        ]
    ]);  
    if ( $response->getStatusCode() == 200 ) {
        // in case of successed
    }
});
```
## Responses
| reply_code        | reply_text           | remark |
|:-------------:|:--------------------------|-------|
| 0   | OK | ดำเนินการสำเร็จ |
| 1   | no file | ไม่มี file ที่ต้องการ upload
| 2   | no current file in storage| ไม่มี file ปัจจุบันใน storage
| 3 | Don't have permission to delete file| ไม่มีสิทธิ์ในการลบไฟล์