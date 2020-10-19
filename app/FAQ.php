<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = "faq";

    protected $fillable = ['id', 'faqcategory_id', 'title','deskripsi', 'created_at', 'deleted_at'];
}
