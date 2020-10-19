<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    public $table = "tentang";

    public $fillable = ['id', 'nama_organisasi', 'deskripsi', 'alamat', 'no_telp', 'email', 'created_at', 'updated_at'];
}
