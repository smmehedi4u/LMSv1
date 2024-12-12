<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::with("author")->paginate(5);
        return view('user.index', compact("books"));
    }

    public function book()
    {
        $books = Book::with("author")
            ->when(request('q'), function ($query) {
                return $query->where("name", "like", '%' . request('q') . "%");
            })
            ->paginate(10);

        return view('user.book', compact("books"));
    }

    public function detail($id)
    {
        $book = Book::with(["author", "category"])->find($id);
        $libraries = $book->libraries()->get()->toArray();
        $user = auth()->user();

        usort($libraries, function ($a, $b) use ($user) {
            if (!isset($user)) return 0;

            $disA = sqrt(pow($a['longitude'] - $user['longitude'], 2) + pow($a['latitude'] - $user['latitude'], 2));
            $disB = sqrt(pow($b['longitude'] - $user['longitude'], 2) + pow($b['latitude'] - $user['latitude'], 2));

            return $disA <=> $disB; // Modern PHP syntax for comparison
        });

        return view('user.detail', compact("book", "libraries"));
    }
}

