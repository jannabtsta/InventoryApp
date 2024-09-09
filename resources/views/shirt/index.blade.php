@extends('layouts.home') <!-- Extends the app layout -->

@section('title', 'Inventory') <!-- Sets the title section -->

@section('content') <!-- Defines the content section -->


    <div class="main-content">
        <div class="header">
            <h1>Inventory</h1>
           
        </div>

    <table class="table-inventory">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th> Category Name </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shirts as $shirt)
            <tr>
                <td>{{ $shirt->id }}</td>
                <td>{{ $shirt->brand }}</td>
                <td>{{ $shirt->quantity }}</td>
                <td>{{ $shirt->price }}</td>
                <td>{{ $shirt->category->name ?? 'N/A' }}</td>
                <td>
                    <button class="inventory-btn" onclick="window.location.href='{{ route('shirt.edit', $shirt->id) }}'">Edit</button>
                    <form action="{{ route('shirt.destroy', $shirt->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="inventory-btn" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button class="inventory-btn" onclick="window.location.href='{{ route('shirt.create', $shirt->id) }}'">Add New Item</button>

</div>
       

@endsection