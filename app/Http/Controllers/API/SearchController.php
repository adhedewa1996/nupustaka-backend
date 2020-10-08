<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Book;
use App\Filepage;
class SearchController extends BaseController
{

    public function show(Request $request) {
      $books = Book::filter($request)->get();
      return $this->sendResponse($books, 'Book successfully.');
    }

    public function searchText(Request $request){
      $texts = Filepage::where([['book_id', $request['book']], ['content', 'LIKE', "%{$request['query']}%"]])
            ->orderBy('page_number', 'ASC')
            ->get();
            // $texts = [];
      if(count($texts) == 0){
        $text = [];
      }else{
        foreach($texts as $data){
          $removehtml = str_replace("\n",' ', strip_tags($data->content));
          $text[] =array(
              "content" => $removehtml,
              "page_number" => $data->page_number,
              "book_id" => $data->book_id
          ); 
        }
      }
      return $this->sendResponse($text, 'Text successfully.');
    }
}
