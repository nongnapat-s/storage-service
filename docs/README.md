# Documentation
## Functions
| Function        | Description           | route  | method
| -------------|:-----|:--------------------------|:----------------------|
| [upload](#upload)    | Upload a file to service | `upload`| `POST` |
| [download](#download)     |  Download a file to user's device(s)  |   `files/{slug}` | `GET` |
| [store](#store) |    Store files to an app's storage   |    `files/{slug}`| `GET` |
| [put-file](#put-file) |  Update an existing file in service   |   `put-file` | `POST` |
| [delete-file](#delete-file) |    Delete a file in service   |  `delete-file`  | `POST` |
| [delete-folder](#delete-folder) |   Delete a folder in service    |   `delete-folder` | `POST` |


### upload
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| file   |`true`| File contents||
| state   |`true`| Store a file in public or local folder| Allow `public` and `local`|
| sub_folder   |`false`|Add a folder under root folder ||

### download
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| slug   |`true`| UUID of a file||

### store
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| slug   |`true`| UUID of a file||

### put-file
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| Method of putting a file | method's value is `put`|
| slug   |`true`| UUID of a file||
| file   |`true`| File contents||

### delete-file
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| Method of deleting a file | method's value is `delete`|
| slug   |`true`| UUID of a file||

### delete-folder
| Data        |Required | Description           | Remark 
| -------------|:-----:|:--------------------------|:----------------------|
| _method   |`true`| Method of deleting a folder | method's value is `delete`|
| state   |`true`| Delete a folder in public or local | Allow `public` and `local`|
| folder   |`false`| Folder's name ||

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