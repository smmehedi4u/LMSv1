<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Category;
use App\Models\Author;
use App\Models\Book;
use App\Models\Library;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $cat = Category::all();
        $author = Author::all();
        $library = Library::all();
        return view('books.index', compact('books','cat','author','library'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        $libraries = Library::all();
        return view('books.create', compact('categories','authors',"libraries"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        // dd($request->all());
        $book = Book::create($request->all());

        $book->libraries()->sync($request->library_id);



        return redirect()->route('admin.book.index')->with('success','Book created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $libraries = Library::all();
        $categories = Category::all();
        $authors = Author::all();

        $lib_ids = $book->libraries()->select("libraries.id")->get()->pluck("id")->toArray();
        // dd($lib_ids);

        return view('books.edit',compact('book','categories','authors','libraries','lib_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        // dd($request->all());
        $book->update($request->all());

// dd($request->library_id);
        $book->libraries()->sync($request->library_id);

        return redirect()->route('admin.book.index')->with('success','Book update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()->with("success","Deleted");
    }
}
