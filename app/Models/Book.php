<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'author_id',
    //     'category_id',
    //     'description',
    // ];

    protected $guarded = ["id"];

    public function libraries()
    {
        return $this->belongsToMany(Library::class, "book_libraries");
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
