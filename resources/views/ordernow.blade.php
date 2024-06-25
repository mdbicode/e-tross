@extends('master')
@section('content')
<div class="custom-product">

<div class="col-sm-10">
<table class="table table-striped">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>Rs. {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>Rs. 0.00</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>Rs. 1,000.00</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>Rs. {{$total+1000}}</td>
        
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="POST">
    @csrf
  <div class="form-group">
    <textarea name="address" type="email" placeholder="Enter Your Address" class="form-control"></textarea>
  </div>
  <div class="form-group">
      <p>
    <label for="pwd">Payment Method</label>
</p>
    <input type="radio" value="cash" name="payment"><span>Online Payment</span><br>
    <input type="radio" value="cash" name="payment"><span>Payment On Delivery</span>
  </div>
  <button type="submit" class="btn btn-default order">Order Now</button>
</form>
  </div>
</div>
</div>

@endsection