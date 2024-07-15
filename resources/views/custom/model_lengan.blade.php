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
        @csrf
        <h1>Silahkan Pilih Model Panjang Lengan</h1>
        <input type="radio" name="lengan" value="panjang"> Panjang <br>
        <input type="radio" name="lengan" value="pendek"> Pendek <br>
        <br>
        <input type="submit" value="Selanjutnya">
    </form>
</section>
@endsection