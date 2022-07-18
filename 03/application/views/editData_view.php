<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"
    <link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
	<title>Document</title>
</head>
<body>
	<?php require('header.php') ?>
	<div class="container">
		<div class="row">
			<h3 class="text-xs-center"cacs>EIDT SIM & GIA</h3>
			<hr>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($mangketqua as $key => $value): ?>
				
			
		
		
 
    <div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
		<form action="../updatedulieu" method="post" enctype="multidata/form-data">
			<br>
          <fieldset class="form-group">
          <label for="formGroupExampleInput2">ID</label>
          <input name="id" type="hidden"  class="form-control" id="formGroupExampleInput2" placeholder="ID" value = <?=  $value['id'] ?>>
          </fieldset>
           

           <fieldset class="form-group">
           <label for="formGroupExampleInput">Số Sim</label>
           <input name="so" type="text" class="form-control" id="formGroupExampleInput" placeholder="Số Sim" value = <?=  $value['so'] ?>>
           
         
       
          </fieldset>
          <fieldset class="form-group">
          <label for="formGroupExampleInput2">Giá Sim</label>
          <input name="gia" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Giá" value =<?=  $value['gia'] ?>>
          </fieldset>
          
          
          <br>
          <input type="submit" class="btn btn-success btn-block" value=" nhập vào mysql">
          <a href="/03/index.php/AddData_controller" class="btn btn-success btn-block"> Back</a>
          
         </form>
		</div>
		</div>
	</div>	
    <?php endforeach ?>
  </div>



	</div>
	
</body>
</html>