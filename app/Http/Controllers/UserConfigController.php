<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use\App\User;

class UserConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user-config.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json()
    {
      $data = User::get();
         return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function($row){
           $btn='
           <a class="btn btn-secondary" tooltip="Show Detail User" href="/admin/user-config/'.$row->id.'"><i class="fab fa-servicestack">
           ';
           return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      return view('user-config.edit', compact('user'));
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
        'name'=>'required',
        'email'=>'required',
        'token'=>'required'
      ],[
        'name.required'=>'This field is required',
        'email.required'=>'This field is required',
        'token.required'=>'This field is required'
      ]);
      $data = User::find($id);
      $data->update($request->all());
      return view('user-config.home')->with('success','Data telah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function topup(Request $request, $id)
    {
      $this->validate($request,[
        'topup'=>'required'
      ],[
        'topup.required'=>'This field is required'
      ]);
      $data_insert2 =User::find($id);
      $data_insert2->token=$request['topup'];
      $data_insert2->save();
      return view('user-config.home')->with('success','Data telah berhasil diupdate');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
