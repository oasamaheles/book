<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Bus;

class AboutsController extends Controller
{

    public function about()
    {
        return view('/about');
    }
}
