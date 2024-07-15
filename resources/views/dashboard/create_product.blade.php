@extends('dashboard.templates.main')
@section('content')
<main>
    <div class="" style="display:flex;justify-content:space-between">
        <h2 class="dash-title">Add Product</h2>
        
    </div>
    <section class="recent">
        <div>
            <div>
                <form action="/dashboard/product/create" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Product Name -->
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <!-- Category -->
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <select class="form-control" name="category" id="category">
                            <option value="kain">Kain</option>
                            <option value="pakaian">Pakaian</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required style="resize: none"></textarea>
                    </div>

                    <!-- Stock -->
                    <div class="form-group">
                        <label for="stock">Stock:</label>
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>

                     <!-- Gallery -->
                    <div class="form-group">
                        <label for="gallery">Gallery (Image):</label>
                        <input type="file" class="form-control-file" id="gallery" name="gallery" accept="image/*" required>
                    </div>


                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

</main>
@endsection;