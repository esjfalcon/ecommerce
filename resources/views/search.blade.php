@extends('master')
@section('content')


<div class="container-pro d-inline">
@foreach($products as $item)
<div class="card" style="width: 18rem;">
  <img src="{{$item['gallery']}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item['name']}}</h5>
    <p class="card-text">{{$item['description']}}.</p>
    <a href="detail/{{$item['id']}}" class="btn btn-primary">Details</a>
  </div>
</div>
@endforeach
</div>






@endsection