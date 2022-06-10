<?php
require('config.php');
class Image
  {
    public function getImages($dir_vrac)
      {
        if($handle = opendir ($dir_vrac))
          {
            while (false !==($entry = readdir($handle) ))
              {
                if ($entry != "." && $entry != "..")
                  {
                    $images[] = $entry;
                  }
              }
          }
          closedir($handle);
          return $images;
      }
  }

?>
