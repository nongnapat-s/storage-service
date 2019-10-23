# Documentation
## Functions
| Function        | Description           | route  | method
| -------------|:-----:|:--------------------------|:----------------------|
| [upload](#upload)    | upload files to service | `upload`| `POST` |
| [download](#download)     |  download files to devices  |   `files/{slug}` | `GET` |
| [store](#store) |    store files to project's storage   |    `files/{slug}`| `GET` |
| [put-file](#put-file) |  update files in service   |   `put-file` | `POST` |
| [delete-file](#delete-file) |    delete files in service   |  `delete-file`  | `POST` |
| [delete-folder](#delete-folder) |   delete folder in service    |   `delete-folder` | `POST` |


### upload
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| file   |`true`| file contents||
| state   |`true`| store file in public or local| allow `public` and `local`|
| sub_folder   |`false`|add more sub folder||

### download
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| slug   |`true`| uuid of file||

### store
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| slug   |`true`| uuid of file||

### put-file
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| method of puting files | method's value is `put`|
| slug   |`true`| uuid of file||
| file   |`true`| file contents||

### delete-file
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| method of deleting files | method's value is `delete`|
| slug   |`true`| uuid of file||

### delete-folder
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| method of deleting folder | method's value is `delete`|
| state   |`true`| delte folder in public or local allow `public` and `local`|
| folder   |`false`| folder||

## Example of uploading file by PHP with GuzzleHttp
```php
Route::post('/upload', function() {
    $client = new GuzzleHttp\Client([
        'base_uri' =>'https://slothme.co/storage-service/',
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
| reply_code        | reply_text           |
|:-------------:|:--------------------------|
| 0   | OK | 
| 1   | no file | 
| 2   |no current file in storage|
| 3 | Don't have permission to delete file|