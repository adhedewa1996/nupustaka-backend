<?php

namespace App\Http\Controllers\API;

use App\FAQ;
use App\FAQCategory;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;

class FAQController extends BaseController
{
    public function index() {
        $faq = FAQCategory::with('faq')->get();
        return $this->sendResponse($faq, 'Faq successfully.');
    }
}
