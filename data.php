<?php 
require_once('photos.php');

$img1 = new Image('2019年9月', 'photos/2020kf.jpeg', '駒場祭のステージマジックの写真です');
$img2 = new Image('2020年8月', 'photos/beetle.jpeg', '夏休みに捕まえたカブトムシの写真です');
$img3 = new Image('2020年9月', 'photos/first_date.jpeg', '美味しそうな抹茶カフェラテです');

$images = array($img1, $img2, $img3);

?>