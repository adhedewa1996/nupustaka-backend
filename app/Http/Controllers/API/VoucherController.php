<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use App\UserTransactionToken;
use Illuminate\Http\Request;
use App\Voucher;

class VoucherController extends BaseController
{
    public function redeem(Request $request, $id){
      $user = $request->user();
      $voucher = Voucher::where('code', $id)->first();
      $history = new UserTransactionToken;
      if($voucher){
        $user->token = $user->token + $voucher->token_amount;
        $user->save();

        $history->user_id = $user->id;
        $history->voucher_id = $voucher->id;
        $history->save();

        return $this->sendResponse($user, 'Voucher redeem successfully.');
      } else {

        return $this->sendError('Voucher not found.', [
          'message' => 'Voucher tidak ditemukan'
        ]);
      }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history(Request $request)
    {
        $user = $request->user();
        $history = UserTransactionToken::with('voucher')
        ->where('user_id', $user->id)
        ->get();;
        return $this->sendResponse($history, 'History User');
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
    public function store(Request $request)
    {
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
