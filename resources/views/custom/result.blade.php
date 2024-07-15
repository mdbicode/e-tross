<!DOCTYPE html>
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
    <div class="container">
    <h1>Hasil prototype</h1>
    <section class="product_section layout_padding">
    <form action="/custom/create/result" method="POST">
    @csrf
        <input type="hidden" name="kain" value="{{ $custom_result['kain'] }}">
        <input type="hidden" name="lengan" value="{{ $custom_result['lengan'] }}">
        <input type="hidden" name="model" value="{{ $custom_result['model'] }}">
        <input type="hidden" name="penerapan_kain" value="{{ $custom_result['penerapan_kain'] }}">
        <input type="hidden" name="lebar_dada" value="{{ $custom_result['lebar_dada'] }}">
        <input type="hidden" name="lebar_pundak" value="{{ $custom_result['lebar_pundak'] }}">
        <input type="hidden" name="panjang_baju" value="{{ $custom_result['panjang_baju'] }}">
        <input type="hidden" name="panjang_lengan" value="{{ $custom_result['panjang_lengan'] }}">
        <h1>Masukkan jumlah pesanan</h1>
        <input type="number" name="jumlah">
        <h1>Alamat</h1>
        <input type="text" name="alamat">
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
        <input type="submit">
    </div>    
    </form>

</section>
@endsection