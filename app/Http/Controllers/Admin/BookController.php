<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Statistic;
use Illuminate\Support\Facades\Bus;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(5);

        return view('admin.books.index', [
            'books' => $books
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $books = Book::all();
        return view('admin.books.create', [
            'books' => $books,
            'categories' => $categories,


        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable',
            'author' => 'required|string|max:255',
            'Release_Date' => 'required ',
            'price' => 'required ',
            'Description_book' => 'required',
            'category_id' => 'exists:categories,id',

        ]);
        $data = $request->all();
        $data['user_id']=1;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] =  $file->store('images', 'public');
        }
      

        $book = Book::create($data);

        return redirect()->back()->with([
            'message_flash' => 'تم إضافة الكتاب بنجاح ..',
            'alter' => 'success'
        ]);
    }


    public function delete($id)
    {
        $book = Book::findOrFail($id); 
        $book->delete();

        return redirect()->back()->with([
            'message_flash' => 'تم حذف الكتاب بنجاح',
            'alter' => 'success'
        ]);
    }
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();


        return view('admin.books.edit', [
            'book' => $book,
            'categories' => $categories,



        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'image' ,
            'author' => 'string|max:255',
            'Release_Date' ,
            'price' => 'required ',
            'Description_book',
            'category_id' =>'exists:categories,id' ,
        ]);
        $data = $request->all();
        $data['user_id'] = 1;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('images', 'public');
        }
        $book = Book::findOrFail($id);
        $book->update($data);
        return redirect()->back()->with([
            'message_flash' => 'تم تعديل الكتاب بنجاح',
            'alter' => 'success'
        ]);
    }

}
