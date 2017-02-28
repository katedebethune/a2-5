<?php require('logic.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Highlights from the Met</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div class="page-header" style="text-align:center;">
<h1>Highlights from the Metropolitan Museum of Art</h1>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-lg-6" style="text-align:center;">

	<?php if($error): ?>
		<div class='alert alert-danger'>
			Please fill out all of the form fields to view the art!
		</div>

	<?php endif; ?>


        <div class='alert alert-info'>Searched for: <?=$form->sanitize($continent)?></div>

	    <?php if(!$haveResults): ?>
	        <div class='alert alert-warning'>No Art found!</div>
	    <?php endif; ?>




	<ul class="gallery">
		<?php foreach($image_data as $image_key=>$image_value) { ?>
                <?='<li>'?>
		<?='<img src="/images/'.$image_value['file_name'].'" style="width:100px;">'?>
		<?='<span style="margin:300px 0px 0px 0px;">'?>
		<?='<img src="/images/'.$image_value['file_name'].'" style="width:300px;">'?>
                <?= $image_value['description']; ?>
		<?='</span>'?>
		<?='</li>'?>
	  	<?php }?>
	</ul>
</div>
<div class="col-md-6 col-lg-6" style="text-align:center;">
<h4>Select from the options below to see highlights from the Met!</h4>

<hr style="width:200px">
<form method='POST' action="/">

  <label for="checkbox">Object type</label>

  <br>
  <input type="checkbox" name="checkbox[]" value="textile"> textiles<br><br>
  <input type="checkbox" name="checkbox[]" value="decorative"> decorative<br><br> 
  <input type="checkbox" name="checkbox[]" value="painting"> paintings<br><br> 
  <input type="checkbox" name="checkbox[]" value="sculpture"> sculptures<br> 
  <hr style="width:200px">


  <label for="century">Date of creation</label>
  <br>
  <input type="radio" name="century" value="17"> 1600-1800 AD<br><br>
  <input type="radio" name="century" value="18"> 1800-1900 AD<br><br>
  <input type="radio" name="century" value="20"> 1900-present<br><br>  

  <hr style="width:200px">

  <label for="continent">Continent</label>
  <br>

  <select name="continent">
  <option value="Africa">Africa</option>
  <option value="Asia">Asia</option>
  <option value="Europe">Europe</option>
  <option value="Americas">Americas</option>
  </select>

  <br><br>
  <input type="submit" value="Submit">


</form>
</div>
</div>
</div>
</body>
</html>
