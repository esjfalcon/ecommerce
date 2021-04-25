<!DOCTYPE html>
<html>
<head>
	<title>Add_Product</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


	<form method="POST" action="addproduct">
		{{ csrf_field() }}
  		<div class="form-group">
   			 <label for="exampleInputEmail1">NAME</label>
   			 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Name">
  		</div>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Category</label>
   			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category" placeholder="Enter category">
  		</div>
  		<div class="form-group">
    		<label for="exampleInputPassword1">Description</label>
    		<input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description">
  		</div>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Price</label>
   			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" placeholder="Enter Price">
  		</div>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Image</label>
   			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image" placeholder="Enter image url">
  		</div>
  			<button type="submit" class="btn btn-primary">Submit</button>
	</form>

</body>
</html>