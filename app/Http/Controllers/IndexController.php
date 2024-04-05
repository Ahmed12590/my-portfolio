<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontent.home');

    }

    public function about($name)
{
    return view('frontent.about', ['name' => $name]);
}

}
