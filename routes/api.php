<?php

Route::apiResource('/questions', 'QuestionController');
Route::apiResource('/categories', 'CategoryController');
Route::apiResource('/questions/{question}/reply', 'ReplyController');