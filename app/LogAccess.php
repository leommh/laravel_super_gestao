<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogAccess extends Model
{
    protected $table = 'log_access';
    protected $fillable = ['log'];
}
