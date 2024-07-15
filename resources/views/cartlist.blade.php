@extends('templates.master')
@section('content')
<section class="inner_page_head">
  <div class="container_fuild">
     <div class="row">
        <div class="col-md-12">
           <div class="full">
              <h3>Keranjang</h3>
           </div>
        </div>
     </div>
  </div>
</section>
<section class="product_section layout_padding">
  <div class="custom-product">
    <div class="product-list">
      <div class="product-wrapper">
        <h3>Result for Products</h3>
        @foreach($products as $items)
        <div class="product-item">
          <img src="{{$items->gallery}}" class="product-image">
          <div class="product-details">
            <div class="product-name">{{$items->name}}</div>
            <div class="product-description">{{$items->description}}</div>
            <a href="/removecart/{{$items->cart_id}}" class="btn btn-warning">Remove From Cart</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  
    <div class="order-summary">
      <h3>Order Summary</h3>

      <div>Total: {{ $total ?? '0' }}</div>
      <a href="ordernow" class="order-button">Order Now</a>
    </div>
  </div>
</div>
</section>

@endsection