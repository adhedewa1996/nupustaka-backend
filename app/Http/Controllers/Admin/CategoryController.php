<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data_category = Category::all();
        return view('admin.category.category',['data_category' => $data_category]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name' => 'required'
        ],
        [
            'category_name.required' => 'This Category Name field is required'
        ]);

        $category = new Category;
        $category->category_name = $request->category_name;
        $category->category_slug = str_slug($request->category_name);
        $category->parent_id = $request->parent_id;
        if($request->hasFile('category_picture')){
            $request->file('category_picture')->move('admin/assets/img/',$request->file('category_picture')->getClientOriginalName());
            $category->category_picture = $request->file('category_picture')->getClientOriginalName();
        }else{
            $category->category_picture = '';
        }
        $category->save();

        return redirect('/admin/category')->with('success', 'Data berhasil ditambahkan');

    }

    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::get();
        return view('admin.category.editCategory',[
            'category' => $category,
            'categories' => $categories
        ]);
    }

    public function update(Request $request,$id)
    {
        $category = Category::find($id);
        $category->update($request->all());
        if($request->hasFile('category_picture')){
            $request->file('category_picture')->move('admin/asstes/img/'.$request->file('category_picture')->getClientOriginalName());
            $category->category_picture = $request->file('category_picture')->getClientOriginalName();
        }else{
            $category->category_picture = '';
        }
        $category->save();

        return redirect('/admin/category')->with('success','Data berhasil diupdate');
    }


    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/category');
    }
}
