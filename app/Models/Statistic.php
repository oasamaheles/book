<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $table = 'statistics';
    protected $fillable = ['number_purchases', 'expensive_books'];

    public function books()
    {
        return $this->hasMany(
            Book::class,
            'statistic_id',
            'id',
        );
    }

}
