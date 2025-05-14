<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'description' => 'required|string',
            'publication_year' => 'required|integer|max:' . date('Y'),
            'page_count' => 'required|integer|min:1',
        ]);

        $books = books::create([
            'name' => $request->name,
            'title' => $request->title,
            'publisher' => $request->publisher,
            'description' => $request->description,
            'publication_year' => $request->publication_year,
            'page_count' => $request->page_count,

        ]);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = books::findOrFail($id);
        return view('books.show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $book)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'description' => 'required|string',
            'publication_year' => 'required|integer|min:1800|max:' . date('Y'),
            'page_count' => 'required|integer|min:1',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $book)
    {
        $book = books::findOrFail($book);
        $book->delete;

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
