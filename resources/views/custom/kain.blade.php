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
        <form action="/custom/create/kain" method="POST">
            @csrf
            <div class="row">
                @foreach ($products as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <label class="item-choice">
                            <input type="radio" name="kain" value="{{ $item->id }}">
                            <img src="/{{ $item->gallery }}" alt="Model 1">
                            <span class="radio-label">{{ $item->name }}</span>
                        </label>
                    </div>
                @endforeach
            </div>
            <input type="submit" value="Selanjutnya" class="btn btn-primary mt-3">
        </form>
    </section>
@endsection
