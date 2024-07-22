<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('search/local/{ceps}', function () {
    return 'ok';
});