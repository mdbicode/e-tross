
@extends('templates.master')
@section('content')
<section class="inner_page_head">
  <div class="container_fuild">
     <div class="row">
        <div class="col-md-12">
           <div class="full">
              <h3>Profile</h3>
           </div>
        </div>
     </div>
  </div>
</section>
<section class="product_section layout_padding">
<div class="container custom-login">
    

    
    <div class="row">
        <h1>My Profile</h1>
        <table class="table">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>{{ session()->get('user')->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ session()->get('user')->email }}</td>
                
            </tr>
        </table>
        <h1>My Orders</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Produk</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                <tr>
                    <td>{{ $item->order_id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->status }}</td>
                    <td style="display:flex;align-items:center">
                        <a href="" style="height: 30px;padding:0"><span  class="bdg warning" style="height: 35px;text-align:center">Batalkan</span></a>
                </tr>

                @endforeach
            </tbody>
        </table>
        
    </div>  
</div>
</section>
@endsection