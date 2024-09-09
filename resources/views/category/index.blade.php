@extends('layouts.home') <!-- Extends the app layout -->

@section('title', 'Inventory') <!-- Sets the title section -->

@section('content') <!-- Defines the content section -->

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Category</h1>
           
        </div>


    <table class="table-inventory">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Name</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                
                <td>
                    <button class="inventory-btn" onclick="window.location.href='{{ route('category.edit', $category->id) }}'">Edit</button>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="inventory-btn" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <button class="inventory-btn" onclick="window.location.href='{{ route('category.create', $category->id) }}'">Add New Category</button>
</div>


@endsection