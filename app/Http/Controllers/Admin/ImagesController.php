<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function create()
    {
       return view('admin.images.create');
    }

    public function index()
    {
       dd('b');
    }

    public function store()
    {
        dd('b');
    }
}
