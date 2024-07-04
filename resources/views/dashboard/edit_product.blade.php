@extends('dashboard.templates.main')
@section('content')
<main>
    <div class="" style="display:flex;justify-content:space-between">
        <h2 class="dash-title">Add Product</h2>
        
    </div>
    <section class="recent">
        <div>
            <div>
                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- Product Name -->
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required >
                    </div>

                    <!-- Category -->
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}" required>
                    </div>

                    <!-- Price -->
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required style="resize: none">{{ $product->description }}</textarea>
                    </div>

                    <!-- Stock -->
                    <div class="form-group">
                        <label for="stock">Stock:</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
                    </div>

                     <!-- Gallery -->
                    <div class="form-group">
                        <label for="gallery">Gallery (Image):</label>
                        <input type="file" class="form-control-file" id="gallery" name="gallery" accept="image/*" value="{{ $product->gallery }}" required>
                    </div>


                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

</main>
@endsection;