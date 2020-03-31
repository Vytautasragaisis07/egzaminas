<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['nr_account', 'attribute', 'balance', 'user_id'];
}
