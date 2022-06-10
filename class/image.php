<?php
class Image {
  public $nom_complet; // montagnes_2009-001.jpg
  public $nom_serie; // montagnes_2009
  public $numero_serie; // 001.jpg

  public function fileToImage($nameOfFile) { 
    $this->$nom_complet = $nameOfFile; 
    $decoupage = explode("-", $this->$nom_complet);
    $this->$nom_serie = $decoupage[0];
    $this->$numero_serie = $decoupage[1];
  }
}
?>
