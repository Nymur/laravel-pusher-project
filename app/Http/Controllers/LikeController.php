<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
	/**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');//the function name is used as param
    }

    public function likeIt(Reply $reply){
        $reply->likes()->create([
          'user_id' => 1
        ]);
    }

    public function unLikeIt(Reply $reply){
        $reply->likes()->where('user_id', 1)->first()->delete();
    }
}
