@include('header')





<div class="containner">
	<img id="user_image" src="{{ $user['gallery'] }}">
	<h3>Welcome {{$user['name']}}</h3>
	<button class="btn btn-primary">Edit Account</button>
	<button class="btn btn-danger">Delete Account</button>

</div>





</body>
<style type="text/css">
	.containner{
		text-align: center
	}
	#user_image{
		height: 100px;
		width: 100px;
	}
</style>