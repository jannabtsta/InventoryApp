@extends('layouts.forms') <!-- Extends the app layout -->

@section('title', 'Inventory') <!-- Sets the title section -->

@section('content') <!-- Defines the content section -->

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Create New Product</h1>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <form action="{{ route('shirt.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="brand">Product</label>
                    <input type="text" id="brand" name="brand" placeholder="Enter brand name" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Enter quantity" required>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="Enter price" required>
                </div>

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select id="category_id" name="category_id" required>
                        <option value="" disabled selected>Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn-submit">Add Product</button>
                <button class="btn-submit" onclick="window.location.href='{{route ('shirt.index')}}'" >Cancel</button>
            </form>
        </div>
    </div>

@endsection
