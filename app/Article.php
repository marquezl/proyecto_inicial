<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{


    protected $table = "articles";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'categoty_id','user_id' ];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}    

	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function images()
	{
		return $this->hasMany('App\Image');
	}


	public function ScopeSearch($query,$title)
	{
		return $query->where('title','LIKE',"%$title%");
	}

}
