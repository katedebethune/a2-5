<?php


require_once "Gallery.php";


$json = file_get_contents("art_data.json");
$objects = json_decode($json);

$test = $objects->museums[0]->name;



$continent_choice = $_POST['continent'];
$period_choice = $_POST['century'];
$object_choices = $_POST['checkbox'];


$gallery = new Gallery("art_data.json");

$image_data = $gallery->getArt($continent_choice,$period_choice,$object_choices);







