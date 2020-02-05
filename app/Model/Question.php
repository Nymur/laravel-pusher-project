<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
	protected $guarded = [];
	
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function replies(){
    	return $this->hasMany(Reply::class);
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName(){
    	return 'slug';
    }

    public function getPathAttribute(){
    	return asset("api/questions/$this->slug");
    }
}
