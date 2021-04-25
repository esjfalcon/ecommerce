

<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>




      		<button type="submit" class="btn btn-success"><a href="addproduct">ADD</a></button>
          <button type="submit" class="btn btn-default"><a href="/">Home</a></button>




<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Desciption</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<tbody>



@foreach($data as $product)
    <tr>
      <!-- <th scope="row">1</th> -->
      <th><img src="{{ $product['gallery'] }}"></th>
      <td>{{ $product['name'] }}</td>
      <td>{{ $product['description'] }}</td>
      <td>{{ $product['price'] }}</td>
      <td>

      	<form method="POST" action="">
      		<button type="submit" class="btn btn-default">Modify</button>
      	</form>

      	<form method="POST" action="deleteProduct">
      		{{ csrf_field() }}
      		<input type="hidden" name="id" value="{{ $product['id'] }}">
      		<button type="submit" class="btn btn-danger">Delete</button>
      	</form>

      </td>
    </tr>
@endforeach


</tbody>
</table>

<style type="text/css">
	img{
		height: 50px;
		width: 50px;
	}
  a{
    text-decoration: none;
  }
</style>
</body>
</html>





<!-- 
  
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->