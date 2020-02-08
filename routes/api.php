<?php

Route::apiResource('/questions', 'QuestionController');
Route::apiResource('/categories', 'CategoryController');
Route::apiResource('/questions/{question}/reply', 'ReplyController');
Route::post('/like/{reply}', 'LikeController@likeIt');
Route::delete('/like/{reply}', 'LikeController@unLikeIt');