@extends('layouts.forms') <!-- Extends the app layout -->

@section('title', 'Inventory') <!-- Sets the title section -->

@section('content') <!-- Defines the content section -->

    <!-- Main Content -->
 <div class="main-content">
    <div class="header">
        <h1>Edit Category Name</h1>
    </div>
 

    {{-- @php dd($categories->all());@endphp   --}}

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


    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
    
         

        <div class="form-group">
            <label for="name">Category</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
        </div>
    
   
        <button type="submit" class="btn-submit btn-primary">Update Category</button>
    </form>
    
</div>

@endsection