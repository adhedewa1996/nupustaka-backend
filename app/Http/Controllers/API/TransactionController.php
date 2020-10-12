<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Transaction;
use App\Book;
use Carbon\Carbon;
class TransactionController extends BaseController
{

    public function beli(Request $request, $id) {
        $user = $request->user();
        $book = Book::find($id);

        $transaction = new Transaction;
        $transaction->user_id = $user->id;
        $transaction->book_id = $id;
        $transaction->status = 'beli';
        $transaction->save();

        $user->token = $user->token - $book->harga_beli;
        $user->save();

        return $this->sendResponse($transaction, 'Pembelian Berhasil.');
    }

    public function cekBeli(Request $request, $id){
        $user = $request->user();
        $transaction = Transaction::where([['user_id', $user->id], ['book_id', $id], ['status', 'beli']])->first();
        if($transaction){
          $pembelian = true;
        } else {
          $pembelian = false;
        }
        return $this->sendResponse($pembelian, 'Pembelian Berhasil.');
    }

    public function getBeli(Request $request){
      $user = $request->user();
      $transaction = Transaction::with('books')->where([['user_id', $user->id], ['status', 'beli']])->get();
      return $this->sendResponse($transaction, 'Pembelian Berhasil.');
    }

    public function sewa(Request $request, $id){
      $user = $request->user();
      $book = Book::find($id);

      $transaction = new Transaction;
      $transaction->user_id = $user->id;
      $transaction->book_id = $id;
      $transaction->status = 'sewa';
      $transaction->expired_at = Carbon::now()->addDays(7);
      $transaction->save();

      $user->token = $user->token - $book->harga_sewa;
      $user->save();

      return $this->sendResponse($transaction, 'Penyewaan Berhasil.');
    }

    public function cekSewa(Request $request, $id){
        $user = $request->user();
        $date = Carbon::now();
        $transaction = Transaction::where([['user_id', $user->id], ['book_id', $id], ['status', 'sewa'], ['expired_at', '>', $date]])->first();
        return $this->sendResponse($transaction, 'Penyewaan Berhasil.');
    }

    public function getSewa(Request $request){
      $user = $request->user();
      $transaction = Transaction::with('books')->where([['user_id', $user->id], ['status', 'sewa']])->get();
      return $this->sendResponse($transaction, 'Sewa Berhasil.');
    }

    public function pinjam(Request $request, $id){
      $user = $request->user();
      $book = Book::find($id);

      $transaction = new Transaction;
      $transaction->user_id = $user->id;
      $transaction->book_id = $id;
      $transaction->status = 'pinjam';
      $transaction->expired_at = Carbon::now()->addDays(7);
      $transaction->save();

      // $user->token = $user->token - $book->harga_pinjam;
      $user->save();

      return $this->sendResponse($transaction, 'Peminjaman Berhasil.');
    }

    public function cekPinjam(Request $request, $id){
        $user = $request->user();
        $date = Carbon::now();
        $transaction = Transaction::where([['user_id', $user->id], ['book_id', $id], ['status', 'pinjam'], ['expired_at', '>', $date]])->first();
        return $this->sendResponse($transaction, 'Peminjaman Berhasil.');
    }

    public function getPinjam(Request $request){
      $user = $request->user();
      $transaction = Transaction::with('books')
        ->where([['user_id', $user->user_id], ['status', 'pinjam']])
        ->orderBy('id', 'DESC')
        ->get();
      return $this->sendResponse($user->user_id, 'Pinjam Berhasil.');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
