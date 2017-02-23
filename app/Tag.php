<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    protected $fillable = ['name'];



    public function scopeSearch($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name%");
    }

}
