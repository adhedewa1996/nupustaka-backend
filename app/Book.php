<?php

namespace App;
use App\Filters\Books\BooksFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Book extends Model {

  protected $table = "books";
  protected $fillable = ['title'];

  public function scopeFilter(Builder $builder, $request){
      return (new BooksFilter($request))->filter($builder);
  }

  public function category() {
      return $this->belongsTo('App\Category', 'category_id');
  }

  public function wishlist(){
     return $this->hasMany(Wishlist::class);
  } 

  public function display(){
     return $this->belongsToMany(Display::class, 'book_displays');
  }
    public function bookCat() {
        return $this->belongsTo('App\BookCategory', 'category_id');
      }
}
