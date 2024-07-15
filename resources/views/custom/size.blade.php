@extends('templates.master')

@section('content')
    <section class="inner_page_head">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Silahkan input ukuran anda</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product_section layout_padding">
        <div class="container">
     
    <form action="/custom/create/size" method="POST">
        @csrf
        <br>
        <div class="form-group">
            <label for="lebar_pundak">Lebar Pundak:</label>
            <input type="text" class="form-control" id="lebar_pundak" name="lebar_pundak" required>
        </div>
        <div class="form-group">
            <label for="lebar_dada">Lebar Dada:</label>
            <input type="text" class="form-control" id="lebar_dada" name="lebar_dada" required>
        </div>
        <div class="form-group">
            <label for="panjang_baju">Panjang Baju:</label>
            <input type="text" class="form-control" id="panjang_baju" name="panjang_baju" required>
        </div>
        <div class="form-group">
            <label for="panjang_lengan">Panjang Lengan:</label>
            <input type="text" class="form-control" id="panjang_lengan" name="panjang_lengan" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
</section>
       
@endsection