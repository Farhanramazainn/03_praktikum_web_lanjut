<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\View;

class productController extends Controller
{
    function product(){
        return view('product');

    }
}

