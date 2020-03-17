<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // allow mass assignment & take responsibility to secure app by yourself
    protected $guarded = [];

    // return string that represents the path to that specific article
    public function path()
    {
        return route('articles.show', $this);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}