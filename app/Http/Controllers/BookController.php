<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    // Display all ISBN Requests
    public function index()
    {
        return view('books.index');
    }

    public function images($id)
    {
        $item = Book::findOrFail($id);
        return view('admin.books.image', [
            'item' => $item,
        ]);
    }

    
    public function videos($id)
    {
        $item = Book::findOrFail($id);
        return view('admin.books.video', [
            'item' => $item,
        ]);
    }

    // Show the form for creating a new ISBN request
    public function create()
    {
        return view('books.create');
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }

    public function edit($id)
    {
        return view('books.edit', compact('id'));
    }

    public function categories()
    {
        return view('admin.books.category');
    }
    public function brands()
    {
        return view('admin.books.brand');
    }

    public function sub_categories()
    {
        return view('admin.books.sub_category');
    }
}
