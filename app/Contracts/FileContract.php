<?php

namespace App\Contracts;


interface FileContract
{
  // get Relative Path
  public function location(string $location);

  // Crawl over the file
  public function execute();
}
