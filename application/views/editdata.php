<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Codelgniter - 3 - crud</title>
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
</head>
<body>

	<div class="jumbotron">
		<h2 class="text-center">Codelgniter - 3 - crud</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto mt-5">
				<div class="clear-fix">
					<h3 class="float-start">Edit data....</h3>
			    </div>
				
			</div>
		</div>
		<hr>

        <div class="row">
            <div class="col-md-6 m-auto card shadow p-5">
            <form action="<?php echo base_url();?>Crud/update/<?php echo $singledata->id?>" method="post">
		  <div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input name="name" class="form-control" id="name" placeholder="Enter your name" value="<?php echo $singledata->name?>">
		  </div>
		  <div class="mb-3">
			<label for="price" class="form-label">Price</label>
			<input name="price" class="form-control" id="price" placeholder="Enter the price" value="<?php echo $singledata->price?>">
		  </div>
		  <div class="mb-3">
			<label for="quelity" class="form-label">Quelity</label>
			<input name="quelity" class="form-control" id="quelity" placeholder="Quelity value" value="<?php echo $singledata->quelity?>">
		  </div>
		  

		  <div class="modal-footer">
           <input type="submit" name="insert" class="btn btn-success" value="update">
         </div>

		</form>
      </div>
    </div>
</div> 