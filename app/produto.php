<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = [
    	"nome",
    	"categoria",
    	"valor"
    ];
}
