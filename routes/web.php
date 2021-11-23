<?php

use App\Events\ArticleCreated;
use App\Events\Test;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // throw new Exception('test');
    // report('Something went wrong.');

    return view('test');
});

Route::get('/send', function () {
    // event(new ArticleCreated('Article #'.rand(1,10), 'vitalii@ukr.net'));
    return true;
});
