<?php 
require_once('data.php');
require_once('photos.php');

$img_path = $_GET['img_path'];

?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <img src=<?php echo $img_path?>>
    </body>
</html>


