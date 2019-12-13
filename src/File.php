<?php

namespace Aznoqmous;

class File {

  public $path = '';
  public $content = '';

  public function __construct($path=null)
  {
    $this->path = $path;
    if(is_file($this->path)) $this->content = $this->load();
    else $this->save('');
  }

  public function load($path=null)
  {
    $this->path = ($path)?:$this->path;
    $handle = fopen($this->path, 'r');
    $this->content = file_get_contents($this->path);

    return $this->content;
  }

  public function save($content)
  {
    $dir = dirname($this->path);
    if(!is_dir($dir)) mkdir($dir, 0777, true);
    file_put_contents($this->path, $content);
  }

  public function append($content)
  {
    $this->save($this->content . PHP_EOL . $content);
  }

}
