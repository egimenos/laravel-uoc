<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
}
