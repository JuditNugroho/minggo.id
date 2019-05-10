<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = 'games';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
}
