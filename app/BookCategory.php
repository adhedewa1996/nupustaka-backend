<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
  public $fillable = ['id', 'book_id', 'category_id', 'created_at', 'updated_at'];
}
