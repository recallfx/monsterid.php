<?php include "MonsterId.php";

// get monster parameter
$monster = isset($_GET['monster']) ? $_GET['monster'] : '0';

// init monster class anf create PNG file
$monsterId = new MonsterId();
$monsterFileName = $monsterId->getAvatar($monster, 40);

// print image
header('Content-Type: image/png');
if ($img = @imagecreatefrompng($monsterFileName)) {
    imagepng($img);
    imagedestroy($img);
}

echo PHP_EOL;

