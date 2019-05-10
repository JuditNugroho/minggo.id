<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopUp extends Model
{
    protected $table = 'topup';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
