@extends('templates.master')

@section('content')
    <section class="inner_page_head">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Silahkan Pilih Kain Troso</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product_section layout_padding">
    <form action="/custom/create/lengan" method="POST">
        <div class="row">
        
        @csrf
        <div class="col-sm-6 col-md-4 col-lg-3">
            <label class="item-choice">
                <input type="radio" name="lengan" value="Panjang">
                <img src="/img/panjang.jpeg" alt="Model 1">
                <span class="radio-label">Panjang</span>
            </label>
            
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
        <label class="item-choice">
            <input type="radio" name="lengan" value="Pendek">
            <img src="/img/pendek.jpeg" alt="Model 1">
            <span class="radio-label">Pendek</span>
        </label>
        </div>
            
    </div>
        <br>
        <input type="submit" value="Buatkan">
    </form>
</section>
@endsection