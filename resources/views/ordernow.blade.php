@extends('templates.master')

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
                    <td>Rs. {{$total + 1000}}</td>
                </tr>
            </tbody>
        </table>

        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <p><label for="payment">Payment Method</label></p>
                    <div>
                        <input type="radio" id="online" value="online" name="payment">
                        <label for="online">Online Payment</label><br>
                    </div>
                    <div>
                        <input type="radio" id="cash" value="cash" name="payment">
                        <label for="cash">Payment On Delivery</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection
