<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Fetch all categories
        return view('category.index', compact('categories')); // Pass to index view
    }

    public function create()
    {
        return view('category.create'); // Show form to create category
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($validatedData); // Store new category
        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id); // Fetch the category by ID
        return view('category.edit', compact('category')); // Pass the single category instance to the view
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id); // Find the category by ID

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Update the item in the database
        $category->update($validatedData);

        // Redirect back to the items list with a success message
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id); // Find the category by ID
        $category->delete(); // Delete the category
        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
