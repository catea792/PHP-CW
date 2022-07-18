<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"
    <link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
	<title>Thêm Số Sim Điện Thoại</title>
</head>
<body>
	<?php require('header.php') ?>
	<div class="container">
		
	<h2 class="text-xs-center"> Thêm Số Điện Thoại</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
		<form action="ShowData_controller/insertData_controller" method="post" enctype="multidata/form-data">
           <fieldset class="form-group">
           <label for="formGroupExampleInput">Số Sim</label>
           <input name="so" type="text" class="form-control" id="formGroupExampleInput" placeholder="Số Sim">
           
         
       
          </fieldset>
          <fieldset class="form-group">
          <label for="formGroupExampleInput2">Giá Sim</label>
          <input name="gia" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Giá">
          </fieldset>
          <br>
          <input type="submit" class="btn btn-success btn-block" value=" nhập vào mysql">
          <br>
          <a href="/03/index.php/AddData_controller" class="btn btn-success btn-block"> Back</a>
          
         </form>
		</div>
		</div>
	</div>	
	
</body>
</html>