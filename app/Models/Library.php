<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{


    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'longitude',
        'latitude',
    ];

    // public function books()
    // {
    //     return $this->belongsToMany(Book::class);
    // }

    public function books()
    {
        return $this->belongsToMany(Book::class, "book_libraries", "library_id", "book_id");
    }
}
