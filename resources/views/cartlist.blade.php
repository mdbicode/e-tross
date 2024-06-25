@extends('master')
@section('content')
<div class="custom-product">

<div class="col-sm-10">


<div class="trending-wrapper">
  <h3 style="font-family: 'Times New Roman', Times, serif;">Result for Products</h3>  
  <a href="ordernow" class="btn btn-success order" style="position: fixed;right: 0;">Order Now</a>
  <br><br>
  @foreach($products as $items)
  <div class="row searched-item cart-list-devider">
  <div class="col-sm-3">
  <a href="detail/{{$items->id}}">
    <img src="{{$items->gallery}}" class="trending-image">
    
</a>
  </div>
  <div class="col-sm-4">
    <a href="detail/{{$items->id}}">
      
      <div class="">
      <h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: black;font-weight: normal;">{{$items->name}}</h4>
      <h5 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: gray;">{{$items->description}}</h5>
    </div>
  </a>
    </div>
    <div class="col-sm-4">
        <a href="/removecart/{{$items->cart_id}}" class="btn btn-warning">Remove From Cart</a>
        </div>
  </div><br>
  @endforeach

  
</div>
<!-- <a href="odernow" class="btn btn-success">Order Now</a>
  <br><br><br><br><br><br> -->

</div>
</div>

@endsection