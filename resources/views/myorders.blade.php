@extends('master')
@section('content')




<div class="container">
  <div class="row">
    <a href="/">Go back</a>
    <div>

    </div>
    <br><br>
  
<div>
      @foreach($products as $item)

    <div class="col-sm-6">
      <img class="detail-img" src="{{$item->gallery}}">
    </div>
    <div class="col-sm-6">
      <h2>name : {{$item->name}}</h2>
      <h5>Delivery : {{$item->status}}</h5>
      <h5>Address : {{$item->address}}</h5>
      <h5>Payment status : {{$item->payment_status}}</h5>
      <h5>Payment method : {{$item->payment_method}}</h5>
      
      <br><br>
      
    </div>

    @endforeach

</div>   
  </div>
</div>

@endsection

