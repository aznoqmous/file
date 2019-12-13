# File
PHP file utility

## Usage
```php
<?php require 'vendor/autoload.php';

use Aznoqmous\File;

// load / create file if it doesnt exist
$file = new File('path/to/file');

// get file content
$content = $file->content;
$content = $file->load('/path/to/file');

// overwrite file content
$file->save('content');

// append to file
$file->append('content');
```
