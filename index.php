<?php require 'vendor/autoload.php';

use Aznoqmous\File;

$file = new File('path/to/file'); // load / create file if it doesnt exist

$content = $file->content;

$content = $file->load('/path/to/file'); // get file content
$file->save('content'); // overwrite file content
$file->append('content'); // append to file
