<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Book;
use\App\BookCategory;
use\App\Category;
use DataTables;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.home');
    }
    public function json()
    {
      $data = Book::get();
         return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function($row){
           $btn='
           <a class="btn btn-warning btn-xs" href="/admin/books/'.$row->id.'"><i class="fas fa-tools"></i></a>
           <button data-id="'.$row->id.'"class="btn-xs btn btn-danger delete-book"><i class="fas fa-trash-restore"></i></button>
           ';
           return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori =Category::get();
        return view('books.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      dd($request);
      // $this->validate($request,[
      //   'title'=>'required',
      //   'deskription'=>'required',
      //   'harga_sewa'=>'required',
      //   'harga_pinjam'=>'required',
      //   'harga_beli'=>'required',
      //   'qty_sewa'=>'required',
      //   'qty_pinjam'=>'required',
      //   'qty_beli'=>'required',
      //   'halaman'=>'required',
      //   'publish_at'=>'required',
      //   'isbn'=>'required',
      //   'bahasa'=>'required',
      //   'picture'=>'required',
      //   'files'=>'required',
      //   'category_id'=>'required'
      // ],[
      //   'title.required'=>'This field is required',
      //   'deskription.required'=>'This field is required',
      //   'harga_sewa.required'=>'This field is required',
      //   'harga_pinjam.required'=>'This field is required',
      //   'harga_beli.required'=>'This field is required',
      //   'qty_sewa.required'=>'This field is required',
      //   'qty_pinjam.required'=>'This field is required',
      //   'qty_beli.required'=>'This field is required',
      //   'halaman.required'=>'This field is required',
      //   'publish_at.required'=>'This field is required',
      //   'isbn.required'=>'This field is required',
      //   'bahasa.required'=>'This field is required',
      //   'picture.required'=>'This field is required',
      //   'files.required'=>'This field is required',
      //   'category_id.required'=>'This field is required'
      // ]);
      $data_insert =new Book;
      $data_insert2 =new BookCategory;
      $data_insert->create($request->all());
      return view('books.home')->with('success','Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $kategori =Category::get();
      $books = Book::find($id);
      return view('books.edit', compact('books','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'title'=>'required',
        'deskription'=>'required',
        'harga_sewa'=>'required',
        'harga_pinjam'=>'required',
        'harga_beli'=>'required',
        'qty_sewa'=>'required',
        'qty_pinjam'=>'required',
        'qty_beli'=>'required',
        'halaman'=>'required',
        'publish_at'=>'required',
        'isbn'=>'required',
        'bahasa'=>'required',
        'picture'=>'required',
        'files'=>'required',
        'category_id'=>'required'
      ],[
        'title.required'=>'This field is required',
        'deskription.required'=>'This field is required',
        'harga_sewa.required'=>'This field is required',
        'harga_pinjam.required'=>'This field is required',
        'harga_beli.required'=>'This field is required',
        'qty_sewa.required'=>'This field is required',
        'qty_pinjam.required'=>'This field is required',
        'qty_beli.required'=>'This field is required',
        'halaman.required'=>'This field is required',
        'publish_at.required'=>'This field is required',
        'isbn.required'=>'This field is required',
        'bahasa.required'=>'This field is required',
        'picture.required'=>'This field is required',
        'files.required'=>'This field is required',
        'category_id.required'=>'This field is required'
      ]);
       $data = Book::find($id);
       $data->update($request->all());
       if($request->hasFile('files') || $request->hasFile('picture')){
           $request->file('files')->move('asset/book',$request->file('files')->getClientOriginalName());
           $data->files = $request->file('files')->getClientOriginalName();
           $request->file('picture')->move('asset/filebook',$request->file('picture')->getClientOriginalName());
           $data->picture = $request->file('picture')->getClientOriginalName();
       }
       $data->save();
       $data_insert2 =new Category;
       $data_insert2->category_id=$request['id_kategori'];
       $data_insert2->save();
       return view('books.home')->with('success','Data telah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pasien= Book::find($id);
      $pasien->delete();
      return view('books.home')->with('success','Data telah berhasil diupdate');
    }
}
