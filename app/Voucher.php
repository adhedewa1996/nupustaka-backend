<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = "vouchers";

    protected $fillable = ['id', 'user_id', 'title', 'code', 'used', 'token_amount', 'expired_at', 'created_at', 'updated_at'];
}
