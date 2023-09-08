<?php

namespace App\Helpers;

use App\Contracts\FileContract;
use Symfony\Component\Finder\Finder;

class FileHelper implements FileContract
{

  protected $filename;
  protected $location;
  protected $path;

  public function location(string $location)
  {
    $this->location = $location;

    return $this;
  }

  public function execute()
  {
    $filenames = [];
    $paths = [];

    $finder = new Finder();

    $finder->files()->in($this->location);

    if ($finder->hasResults()) {
      foreach ($finder as $file) {
        $paths[] = $file->getRealPath();
        $filenames[] = $file->getRelativePathname();
      }
    }
    $this->filename = $filenames;
    $this->path = $paths;

    return $this;
  }

  public function getFileName()
  {
    return $this->filename;
  }

  public function getAbsolutePath()
  {
    return $this->path;
  }
}
