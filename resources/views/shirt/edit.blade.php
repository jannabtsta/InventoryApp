@extends('layouts.forms') <!-- Extends the app layout -->

@section('title', 'Inventory') <!-- Sets the title section -->

@section('content') <!-- Defines the content section -->

 <!-- Main Content -->
 <div class="main-content">
    <div class="header">
        <h1>Edit Product Details</h1>
    </div>
 {{--    @php
        dd($shirts);
    @endphp --}}

    <!-- Display validation errors, if any -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Item Form -->
    <div class="form-container">
    <form action="{{ route('shirt.update', $shirts->id) }}" method="POST">
        @csrf
        @method('PUT')
    
         

        <div class="form-group">
            <label for="name">Product</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $shirts->brand) }}" required>
        </div>
        
        <div class="form-group">
    <label for="category_id">Category:</label>
        <select id="category_id" name="category_id">
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $shirts->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select><br></div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $shirts->quantity) }}" required>
        </div>
    
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $shirts->price) }}" required>
        </div>
    
        <button type="submit" class="btn-submit">Update Item</button>
        <button class="btn-submit" onclick="window.location.href='{{route ('shirt.index')}}'">Cancel</button>

    </form>
    
</div>

@endsection