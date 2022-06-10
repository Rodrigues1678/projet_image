<?php

class Image
{
    public function getImages($image_dir)
    {
        if($handle = opendir($image_dir))
        {
            while(false !== ($entry = readdir($handle)))
            {
                if(($entry != '.') and ($entry != '..') and ($entry != '.DS_Store'))
                {
                    $images[] = $entry;
                }
            }
        }
    closedir($handle);
    return $images;
    }
}



$image_dir = '/Applications/MAMP/htdocs/projet_image/vrac/';
$avions = '/Applications/MAMP/htdocs/projet_image/photos/avions/';
$montagne = '/Applications/MAMP/htdocs/projet_image/photos/montagne_2009/';
$photos = '/Applications/MAMP/htdocs/projet_image/photos/';
$image = new Image();
$images = $image->getImages($image_dir);

if(!is_dir($photos))
{
    mkdir($photos);
}
foreach($images as $key => $name)
{
    $explode = explode('-',$name);
    if($explode[0] == 'avions')
    {
        if(!is_dir($avions))
        {
            mkdir($avions);
            rename($image_dir.$name,$avions.$name);
        }
        else
        {
            rename($image_dir.$name,$avions.$name);
        }
    }
    elseif($explode[0] == 'montagne_2009')
    {
        if(!is_dir($montagne))
        {
            mkdir($montagne);
            rename($image_dir.$name,$montagne.$name);
        }
        else
        {
            rename($image_dir.$name,$montagne.$name);
        }
    }
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PREMIERS PAS AVEC BRACKETS</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

<h1> Rangement d'images </h1>



<?php
$image = new Image();
$images_avion = $image -> getImages($avions);
$images_montagne = $image -> getImages($montagne);


 echo '<h2>Liste des photos d\'avions</h2><ul>' ;

foreach($images_avion as $id => $avion)
{
    echo '<li>' .$avion. '</li>';
}
?>
</ul>

    <?php
     echo '<h2>Liste des photos de montagne_2009 </h2><ul>' ;

foreach($images_montagne as $id => $montagne)
{
    echo '<li>' .$montagne. '</li>';
}
?>
</ul>


</body>
</html>
