<?php require('logic.php'); ?>
<!DOCTYPE html>
<html>
<head>
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
	<?php if(count($image_data)==0){ echo "no results found for ".$continent_choice; }?>
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
<form method='POST' action="/">

  <h4>Object type</h4>
  <input type="checkbox" name="checkbox[]" value="textile"> textiles<br></br>
  <input type="checkbox" name="checkbox[]" value="decorative"> decorative<br></br> 
  <input type="checkbox" name="checkbox[]" value="painting"> paintings<br></br> 
  <input type="checkbox" name="checkbox[]" value="sculpture"> sculptures<br> 
  <hr style="width:200px"></hr>


  <h4>Date of creation</h4>
  <input type="radio" name="century" value="17"> 1600-1800 AD<br></br>
  <input type="radio" name="century" value="18"> 1800-1900 AD<br></br>
  <input type="radio" name="century" value="20"> 1900-present<br></br>  

  <hr style="width:200px"></hr>

  <h4>Continent</h4>

  <select name="continent">
  <option value="Africa">Africa</option>
  <option value="Asia">Asia</option>
  <option value="Europe">Europe</option>
  <option value="Americas">Americas</option>
  </select>

  <input type="submit" value="Submit">


</form>
</div>
</div>
</div>
</body>
</html>
