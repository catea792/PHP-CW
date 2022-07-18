<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xem du lieu</title>
</head>
<body>
	<?php require('header.php') ?>
	<div class="container">
		<div class="row">
			<h3 class="text-xs-center"cacs>sim has been availabe</h3>
			<hr>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($dulieutucontroller as $key => $value): ?>
				
			
		
		
 
    <div class="card-body">
    <h5 class="card-title">So sim : <?=  $value['so'] ?></h5>
    <p class="card-text">Price : <?= $value['gia'] ?></p>
    <a href="/03/index.php/showData_controller/deleteData/<?= $value['id']  ?>" class="btn btn-primary">Delete</a>
    <a href="/03/index.php/showData_controller/editData/<?= $value['id']  ?>" class="btn btn-primary">Edit</a>
    <a href="/03/index.php/AddData_controller" class="btn btn-primary">Back</a>
    <hr>
    
    </div>
    <?php endforeach ?>
  </div>



	</div>
</body>
</html>