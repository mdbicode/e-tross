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
    <form action="/custom/create/penerapan-kain" method="POST">
        @csrf
        <h1>Silahkan Pilih Penerapan Kain</h1>
        <input type="radio" name="penerapan_kain" value="model1">Model 1 <br>
        <input type="radio" name="penerapan_kain" value="model2">Model 2 <br>
        <input type="radio" name="penerapan_kain" value="model3">Model 3 <br>
        <br>

        <input type="submit" value="Buatkan">
    </form>
</section>
@endsection