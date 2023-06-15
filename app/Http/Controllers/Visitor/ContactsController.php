<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Bus;

class ContactsController extends Controller
{

    public function contact()
    {
        return view('/contact');
    }
}