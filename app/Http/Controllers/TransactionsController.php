<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DB;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = DB::select('SELECT books.title, users.name, transactions.created_at, transactions.status, transactions.id FROM transactions join books on transactions.book_id=books.id JOIN users on transactions.user_id=users.id ');
        return view('transactions.home',compact('data'));
    }
}
