<?php


require("Gallery.php");
require("Form.php");


$gallery = new Gallery("art_data.json");

$form = new DWA\Form($_POST);

$errors = false;

if($form->isSubmitted()){
	$continent = $form->get('continent');
	$period = $form->get('century');
        $objects = $form->get('checkbox');	

	
        $fields = ['continent','century','checkbox'];

	foreach($fields as $field) {
  		if (empty($_POST[$field])) {
    			$error = true;
  	        }
	}

        if($errors)
		$image_data = [];
	else
		$image_data = $gallery->getArt($continent,$period,$objects);

	$haveResults = (count($image_data) == 0) ? false : true;
}
