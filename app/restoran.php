<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restoran extends Model
{
    protected $fillable = [
        "name",
        "description",
        "price"
    ];
}
