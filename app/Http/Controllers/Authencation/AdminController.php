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
        return view('client.admin.index');
    }

    public function listCate()
    {
        $cate = Category::all();
        return view('client.admin.category', compact('cate'));
    }

    public function handleCate()
    {
        $vali = request()->validate([
            'name' => 'required',
        ]);
        $data = Category::create($vali);
        $cate = Category::all();
        return view('client.admin.category', compact('cate'));
    }

    public function delete(Category $category)
    {
        $category->delete();
        $cate = Category::all();
        return redirect()->route('listCate', compact('cate'));
    }

    public function edit(Category $category)
    {
        return view('client.admin.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('listCate')->with('success', 'Category updated successfully.');
    }
}
