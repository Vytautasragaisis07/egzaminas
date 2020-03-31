<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = ['payer_id', 'nr_account', 'receiver_name', 'receiver_surname', 'amount', 'status'];
}
