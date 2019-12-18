# คู่มือการใช้งานระบบ Storage Service
ระบบ Storage Service เป็นระบบช่วยจัดเก็บไฟล์ต่างๆ ของ client applications โดยมี function ต่างๆ ดังต่อไปนี้
  
- [upload](#upload)
- [download](#download)
- [store](#store)
- [put-file](#put-file)
- [delete-file](#delete-file)
- [delete-folder](#delete-folder)

## upload
upload เป็น function สำหรับ upload file ต่างๆ จาก client applications ไปเก็บไว้ที่ Storage Service

1. Http Request

| route | method |
|:-----:|:-------:|
| `upload`| `POST` |

2. ข้อมูลที่ต้องส่งไปยัง Storage Service เพื่อทำการ upload file

| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| file   |`true`| ไฟล์ที่ต้องการ upload | upload ไฟล์ได้ไม่เกินครั้ง 10 mb|
| state   |`true`| storage folder ของ Storage Service ที่ต้องการเก็บไฟล์ โดยส่งคำว่า `public` หรือ `local`| หากต้องการเก็บไฟล์ที่สามารถดูผ่าน browser ได้ให้เก็บไฟล์ไว้ที่ `public` |
| sub_folder   |`false`| เพิ่ม sub folder ภายใต้ folder ที่สร้างขึ้นใน Storage Service  ||

## download
download เป็น function สำหรับ download file จาก Storage Service เข้าสู่ device ของ client

1. Http Request

| route | method |
|:-----:|:-------:|
| `files/{slug}` | `GET` |

2. ข้อมูลที่ต้องใช้สำหรับการ download file 

| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| slug   |`true`| value ที่ใช้แทน id ของไฟล์ | จะได้รับ slug หลังจากทำการ upload ไฟล์แล้ว|

## store
store เป็น function สำหรับ store file จาก Storage Service เข้าสู่ folder storage ของ client

1. Http Request

| route | method |
|:-----:|:-------:|
| `files/{slug}`| `GET` 

2. ข้อมูลที่ต้องใช้สำหรับการ store file 

| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| slug   |`true`| value ที่ใช้แทน id ของไฟล์ |จะได้รับ slug หลังจากทำการ upload ไฟล์แล้ว|

## put-file
put-file เป็น function สำหรับ update file ที่อยู่แล้วใน Storage Service

1. Http Request

| route | method |
|:-----:|:-------:|
| `put-file` | `POST` |

2. ข้อมูลที่ต้องส่งไปยัง Storage Service เพื่อทำการ update file

| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| method ของการ update file โดยมีค่าเท่ากับ `put` ||
| slug   |`true`| value ที่ใช้แทน id ของไฟล์|จะได้รับ slug หลังจากทำการ upload ไฟล์แล้ว|
| file   |`true`| file ใหม่ที่ต้องการส่ง|

## delete-file
delete-file เป็น function สำหรับลบ file ใน Storage Service  

1. Http Request

| route | method |
|:-----:|:-------:|
|  `delete-file`  | `POST` |

2. ข้อมูลที่ต้องส่งไปยัง Storage Service เพื่อทำการลบ file

| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| method ของการลบ file โดยมีค่าเท่ากับ `delete` ||
| slug   |`true`| value ที่ใช้แทน id ของไฟล์||

## delete-folder
delete-folder เป็น function สำหรับลบ folder ใน Storage Service 

1. Http Request

| route | method |
|:-----:|:-------:|
| `delete-folder` | `POST` |

2. ข้อมูลที่ต้องส่งไปยัง Storage Service เพื่อทำการลบ folder

| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| method ของการลบ folder โดยมีค่าเท่ากับ `delete` | method's value is `delete`|
| state   |`true`| storage folder ของ Storage Service ที่ต้องการลบ folderโดยส่งคำว่า `public` หรือ `local` ||
| folder   |`false`| ชื่อของ folder ที่ต้องการลบ ||

## Example of uploading file by PHP with GuzzleHttp

ตัวอย่างการ upload file ไปยัง Storage Service โดยใช้ PHP และ GuzzleHttp

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

### Http Responses

| Status code | Status text |Description |
|:----------:|:---------|:---------|
| 200 | OK |สามารถส่ง Request ไปยัง Storage Service ได้สำเร็จ |
| 400 | incomplete request |ส่งข้อมูลไปยัง Storage Service ไม่ครบถ้วน |
| 401 | not allowed |Client ไม่ได้รับอนุญาติให้ดำเนินการต่างๆ กับ Storage Service |
| 500 | internal server error | เกิด error ที่ฝั่ง Storage Service |

### Reply statuses

ข้อมูลที่ client จะได้รับจาก Storage Service ในการดำเนินการต่างๆ 

| reply_code        | reply_text           | Description |
|:-------------:|:--------------------------|-------|
| 0   | OK | ดำเนินการสำเร็จ |
| 1   | no file | ไม่มี file ที่ต้องการ upload
| 2   | no current file in storage| ไม่มี file ปัจจุบันใน storage
| 3 | Don't have permission to delete file| ไม่มีสิทธิ์ในการลบไฟล์

### Data

ข้อมูลที่ client จะได้รับจาก Storage Service ในการดำเนินการ upload และ upload file

| data | Description|
|:----------:|:---------|
| path | directory ที่จัดเก็บ file |
| state | storage folder ของ Storage Service ที่จัดเก็บ file |
| name | ชื่อของ file |
| type | ประเภทของ file |
| size | ขนาดของ file |
| url | กรณีที่ เก็บไฟล์ไว้ใน `public` ระบบจะ return URL ที่ใช้สำหรับเข้าถึง file ผ่าน browser|
| slug| value ที่ใช้แทน id ของไฟล์ |
| created_at| วันและเวลาที่ upload file |
| updated_at| วันและเวลาที่มีการ update file|
