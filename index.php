<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Images</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

      <h1> Rangement d'images </h1>
      <?php
      require('class/image.php');
      require('config.php');
      $image = new Image();
      $images = $image->getImages($dir_vrac);
      foreach($images as $name)
        {
	         if(is_file($dir_vrac.'/'.$name))
              {
		              if(strpos($name, 'champs') !== false)
		                {
			                   rename($dir_vrac.'/'.$name,$dir_champs.'/'.$name);
			                   echo $name.' : champs<br />';
		                }
		               elseif(strpos($name, 'desert') !== false)
		                {
			                   rename($dir_vrac.'/'.$name,$dir_desert.'/'.$name);
			                   echo $name.' : desert<br />';
		                }
                   elseif(strpos($name, 'lavande') !== false)
    		            {
    			               rename($dir_vrac.'/'.$name,$dir_lavande.'/'.$name);
    			               echo $name.' : lavande<br />';
    		            }
		               else
		                {
			                   // rien ds le vrac
		                }
	            }
        }
      ?>
  </body>

</html>
