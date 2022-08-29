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
					<h3 class="float-start">All products list</h3>
					<a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Data</a>
			    </div>
				
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-8 m-auto mt-3">
				<table class="table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Price</th>
							<th>Quality</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $key = 1; foreach($products as $key => $product ):?>
							
							
								<tr>
								    <td><?=$key?></td>
									<td><?php echo $product->name?></td>
									<td><?php echo $product->price?></td>
									<td><?php echo $product->quelity?></td>
									<td>
										<a href="<?php echo base_url()?>Crud/edit/<?php echo $product->id?>" class="btn btn-success">Edit</a>
										<a href="<?php echo base_url()?>Crud/delete/<?php echo $product->id?>" class="btn btn-danger">Delete</a>
									</td>

								</tr>
							
						<?php endforeach; ?>
						
					</tbody>
				</table>
			</div>
		</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter All information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url();?>Crud/addProduct" method="post">
		  <div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input name="name" class="form-control" id="name" placeholder="Enter your name">
		  </div>
		  <div class="mb-3">
			<label for="price" class="form-label">Price</label>
			<input name="price" class="form-control" id="price" placeholder="Enter the price">
		  </div>
		  <div class="mb-3">
			<label for="quelity" class="form-label">Quelity</label>
			<input name="quelity" class="form-control" id="quelity" placeholder="Quelity value">
		  </div>
		  

		  <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <input type="submit" name="insert" class="btn btn-success" value="insert">
         </div>

		</form>
      </div>
      
    </div>
  </div>
</div>

</div>

<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto">
			<?php if($this->session->flashdata('error')):?>
			<div class='text-center text-success bg-danger'>
			<?php echo $this->session->flashdata('error');?>
			</div>
			<?php endif;?>


			<?php if($this->session->flashdata('insert')):?>
			<div class='text-center text-white bg-success'>
			<?php echo $this->session->flashdata('insert');?>
			</div>
			<?php endif;?>

			<?php if($this->session->flashdata('update')):?>
			<div class='text-center bg-success text-primary'>
			<?php echo $this->session->flashdata('update');?>
			</div>
			<?php endif;?>


			</div>
		</div>
</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>