
@extends('templates.master')
@section('content')
<section class="inner_page_head">
  <div class="container_fuild">
     <div class="row">
        <div class="col-md-12">
           <div class="full">
              <h3>Login</h3>
           </div>
        </div>
     </div>
  </div>
</section>
<section class="product_section layout_padding">
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="POST">
                <div class="form-group">
                    @csrf
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>  
</div>
</section>
@endsection