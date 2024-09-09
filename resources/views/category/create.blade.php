@extends('layouts.forms') <!-- Extends the app layout -->

@section('title', 'Inventory') <!-- Sets the title section -->

@section('content') <!-- Defines the content section -->


    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Create New Category</h1>
       

        <!-- Form Container -->
        <div class="form-container">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="brand">Name of Category</label>
                    <input type="text" id="name" name="name" placeholder="Enter a category" required>
                </div>


                <button type="submit" class="btn-submit">Add Category</button>
                <button class="btn-submit" onclick="window.location.href='{{route ('category.index')}}'" >Cancel</button>
            </form>
        </div>
    </div>
    </div>

@endsection
