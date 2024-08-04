<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::all();
        $dataCate = Category::all();
        return view('client.member.home', compact('data', 'dataCate'));
    }

    public function details($idDT)
    {
        $post = Post::findOrFail($idDT);
        $dataCate = Category::all();
        $dataCatedt = Category::findOrFail($idDT);

        return view('client.member.details', compact('post', 'dataCate', 'dataCatedt'));
    }

    public function tinTrongLoai($idTL)
    {
        $tin = DB::table('posts')->where('category_id', $idTL)->get();
        $loaitin = DB::table('posts')->select('id', 'title')
            ->orderBy('id', 'ASC')
            ->limit(5)->get();
        $dataCate = Category::all();
        $currentCategory = Category::findOrFail($idTL);
        return view('client.member.shop', compact('dataCate', 'tin', 'loaitin', 'currentCategory'));
    }

    public function search(Request $request)
    {
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
        return view('client.member.results', compact('dataCate', 'results', 'query'));
    }
}
