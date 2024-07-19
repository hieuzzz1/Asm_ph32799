<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::all();
        $dataCate = Category::all();
        return view('client.home', compact('data', 'dataCate'));
    }

    public function tinTrongLoai($idTL)
    {
        $tin = DB::table('posts')->where('category_id', $idTL)->get();
        $loaitin = DB::table('posts')->select('id', 'title')
            ->orderBy('id', 'ASC')
            ->limit(5)->get();
        $dataCate = Category::all();

        return view('client.shop', compact('dataCate', 'tin', 'loaitin'));
    }

    public function search(Request $request)
    {
        // Validate yêu cầu
        $request->validate([
            's' => 'required|string|min:1',
        ], [
            's.required' => 'Vui lòng nhập từ khóa tìm kiếm.',
            's.min' => 'Từ khóa tìm kiếm phải có ít nhất 1 ký tự.'
        ]);

        $query = $request->input('s');
        $results = Post::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->get();
        $dataCate = Category::all();
        return view('client.results', compact('dataCate', 'results', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
