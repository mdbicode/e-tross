@extends('dashboard.templates.main')
@section('content')
<main>
    <div class="" style="display:flex;justify-content:space-between">
        <h2 class="dash-title">Product</h2>
        <a href="/dashboard/product/create"><button class="btn-primary">Add New Product</button></a>
    </div>
    <section class="recent">
        <div>
            <div class="activity-card">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produk</th>
                            <th>User</th>
                            <th>Address</th>
                            <th>Payment Method</th>
                            <th>Payment Status</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $item)
                        <tr>
                            <td>{{ $item->order_id }}</td>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->payment_method }}</td>
                            <td>{{ $item->payment_status }}</td>
                            <td>{{ $item->status }}</td>
                            <td style="display:flex;align-items:center">
                               <a href="{{ route('product.edit', $item->id) }}" style="height: 30px;padding:0"><span  class="bdg warning" style="height: 35px;text-align:center">Batalkan</span></a>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>   
@endsection;