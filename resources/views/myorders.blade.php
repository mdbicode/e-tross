@extends('master')
@section('content')
<div class="custom-product">

<div class="col-sm-10">


<div class="trending-wrapper">
  <h3 style="font-family: 'Times New Roman', Times, serif;">My Orders</h3>  
  <br><br>
  @foreach($orders as $items)
  <div class="row searched-item cart-list-devider">
  <div class="col-sm-3">
  <a href="detail/{{$items->id}}">
    <img src="{{$items->gallery}}" class="trending-image">
    
</a>
  </div>
  <div class="col-sm-4">
    <a href="detail/{{$items->id}}">
      
      <div class="">
      <h2 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: black;font-weight: normal;">Name: {{$items->name}}</h2>
      <h5 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: gray;">Description Status: {{$items->status}}</h5>
      <h5 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: gray;">Address: {{$items->address}}</h5>
      <h5 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: gray;">Payment Status: {{$items->payment_status}}</h5>
      <h5 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: gray;">Payment Method: {{$items->payment_method}}</h5>
    </div>
  </a>
    </div>
    
  </div><br>
  @endforeach

  
</div>
<!-- <a href="odernow" class="btn btn-success">Order Now</a>
  <br><br><br><br><br><br> -->

</div>
</div>

@endsection