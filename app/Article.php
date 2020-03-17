<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // allow mass assignment & take responsibility to secure app by yourself
    protected $guarded = [];
}
