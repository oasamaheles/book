<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;

class CartController extends Controller
{

    public function cart($id){
        $books=Book::findOrFail($id);
        return view('/cart')->with([
            'books'=>$books
        ]);
    }

      public function pur($book_id)
    {
        if (Auth::check()) {
            $user_id = Auth::id();
            $books = Book::find($book_id);
            $users = User::find($user_id);
    
            if ($users->budget >= $books->price) {

                $users->books()->attach($book_id);
    
                $users->budget -= $books->price;
                $users->save();
                 return redirect()->back()->with('message', 'تمت عملية الشراء بنجاح. تفاصيل الكتاب: ' . $books->name);
                //return redirect()->route('customer/', ['bookId' => $bookId])->with('message', 'تمت عملية الشراء بنجاح.');

            } else {
                return redirect()->back()->with('error', 'عذرًا، لا يوجد رصيد كافٍ لإتمام عملية الشراء.');
            }
        } else {
            return redirect()->back()->with('error', 'يرجى تسجيل الدخول لإتمام عملية الشراء.');
}
  
}
}