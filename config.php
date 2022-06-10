<?php
$dir_vrac = 'c:\wamp\www\projet_image\images\vrac';
$dir_tri = 'c:\wamp\www\projet_image\images\tri';
$dir_champs = $dir_tri.'/champs';
$dir_desert = $dir_tri.'/desert';
$dir_lavande= $dir_tri.'/lavande';

if(!is_dir($dir_vrac)){ mkdir($dir_vrac, 0777);}
if(!is_dir($dir_tri)){ mkdir($dir_tri, 0777);}
if(!is_dir($dir_champs)){mkdir($dir_champs, 0777);}
if(!is_dir($dir_desert)){mkdir($dir_desert, 0777);}
if(!is_dir($dir_lavande)){ mkdir($dir_lavande, 0777);}

 ?>
