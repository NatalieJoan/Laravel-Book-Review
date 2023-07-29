<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['review', 'rating']; // some properties can be mass assigned
    public function book()
    {
        return $this->belongsTo(Book::class);   // every review belongs to one book
    }
}
