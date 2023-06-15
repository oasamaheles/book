<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

use Illuminate\Support\Facades\Bus;

class HomeController extends Controller
{

    public function welcome(){
        $books = Book::latest()->take(3)->get();//ارجاع احدث كتب
        return view('welcome')->with([
            'books'=>$books
        ]);
    }


   


    public function classes()
    {
        $name = request()->query('name', '');
        //  return $name;
        $books =  Book::when($name, function ($query, $name) {
            return $query->where('name', 'LIKE', '%' . $name . '%');
        })
            ->paginate(4);
        return view('/classes', [
            'books' => $books,
            'name' => $name,
           
        ]);

    }






}