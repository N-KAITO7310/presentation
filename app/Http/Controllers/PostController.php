<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('contents.index');
    }
}
