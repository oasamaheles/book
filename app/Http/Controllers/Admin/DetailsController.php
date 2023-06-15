<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

use Illuminate\Support\Facades\Bus;

class DetailsController extends Controller
{

    public function details($id){

    
    {
        $books = Book::find($id);
    return view('/view-details', compact('books'));
 }
    }

    }
