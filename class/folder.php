<?php
class Folder {
  public $liste_images[];

  public function getFiles($dir_vrac){
    if($handle = opendir($dir_vrac)){
      while (false !== ($fichier = readdir($handle) )) {
        if ($fichier != "." && $fichier != ".." && strpos($fichier, '.jpg')) {
            $image = new Image();
            $image->fileToImage($fichier);
            array_push($this->liste_images, $image);
        }
      }
      closedir($handle);
    }
  }

  public function isEmpty() {
    return count($this->$liste_images) == 0;
  }
}

?>