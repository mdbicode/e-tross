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
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->price }}</td>
                            <td style="display:flex;align-items:center">
                               <a href="{{ route('product.edit', $item->id) }}" style="height: 30px;padding:0"><span  class="bdg warning" style="height: 35px;text-align:center">Edit</span></a>
                                    <form style="height: 30px; padding:0; margin-left:4px" action="{{ route('product.delete', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bdg danger" style="height: 35px">Delete</button>
                                    </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>
@endsection;