<?php

namespace App\Http\Controllers\Authencation;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = Post::all();
        $dataCate = Category::all();
        return view('client.admin.index', compact('data', 'dataCate'));
    }
}
