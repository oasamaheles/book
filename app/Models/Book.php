<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['name', 'image', 'author', 'Release_Date', 'price', 'Description_book','category_id'];
    public function category()
    {
        return $this->belongsTo(
            Category::class,
            'category_id',
            'id',
        )->withDefault('N/A');
    }

    public function statistic()
    {
        return $this->belongsTo(
            Statistic::class,
            'statistic_id',
            'id',
        )->withDefault('N/A');
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'book_user',
            'book_id',
            'user_id',
            'id',
            'id',

        );
    }

}
