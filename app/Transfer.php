<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = ['nr_account', 'description', 'sum', 'name', 'surname'];
}

