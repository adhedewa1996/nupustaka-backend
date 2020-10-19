<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Tentang;

class TentangController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $displays = Tentang::limit(1)->get();
      return $this->sendResponse($displays, 'Data Tentang Berhasil Didapatkan.');
    }
}
