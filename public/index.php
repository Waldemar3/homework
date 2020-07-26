<?php
require_once("config.php");
use App\RGB;

$rgb = new RGB(200, 200, 200);

echo "<br>" . var_dump($rgb->equals(new RGB(200, 200, 200)));
echo "<br>" . var_dump($rgb::random());

$mixRGB = $rgb->mix(new RGB(100, 100, 50));
echo 'СЧ красный ' . $mixRGB->getRed() . "<br>";
echo 'СЧ зеленый ' . $mixRGB->getGreen() . "<br>";
echo 'СЧ синий ' . $mixRGB->getBlue() . "<br>";
?>
