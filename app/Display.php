<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    public function books(){
       return $this->belongsToMany(Book::class, 'book_displays');
    }
}
