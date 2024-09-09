<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shirts;
use App\Models\Category;

class ShirtController extends Controller
{

    public function index()
    {
        $shirts = Shirts::with('category')->get();
        return view('shirt.index', compact('shirts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('shirt.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'brand' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'category_id' => 'nullable|exists:categories,id',
        ]);
        Shirts::create($request->all());

        return redirect()->route('shirt.index')->with('success', 'Shirt created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     
    $shirts = Shirts::with('category')->findOrFail($id);
    return view('shirt.show', compact('shirts'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $shirts = Shirts::findOrFail($id);  // Retrieve the shirt by ID
    $categories = Category::all();
    return view('shirt.edit', compact('shirts', 'categories'));  // Pass the retrieved shirt to the view
}

    
    public function update(Request $request, Shirts $shirts, $id)
{
   // dd($shirts);

    $shirts = Shirts::findOrFail($id);

    // Validate the request data
    $validatedData = $request->validate([
        'brand' => 'required|string|max:255',
        'quantity' => 'required|integer',
        'price' => 'required|numeric',
        'category_id' => 'nullable|exists:categories,id',
    ]);

    // Update the item in the database
    $shirts->update($validatedData);

    // Redirect back to the items list with a success message
    return redirect()->route('shirt.index')->with('success', 'Item updated successfully');
}

public function destroy($id)
{
    // Find the shirt by its ID
    $shirts = Shirts::findOrFail($id);

    // Delete the shirt
    $shirts->delete();

    // Redirect or return a response
    return redirect()->route('shirt.index')->with('success', 'Shirt deleted successfully.');
}
}