<?php


require("Gallery.php");
require("Form.php");


$gallery = new Gallery("art_data.json");

$form = new DWA\Form($_POST);

if($form->isSubmitted()){
	$continent = $form->get('continent');
	$period = $form->get('century');
        $objects = $form->get('checkbox');	
        
	$image_data = $gallery->getArt($continent,$period,$objects);

}
