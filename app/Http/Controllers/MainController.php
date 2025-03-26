<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index (){
        $data = array(
            'title' => 'Product Page',
        );
        return view('page/produk', $data);
    }
}
