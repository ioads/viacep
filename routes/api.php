<?php

use App\Http\Controllers\CepController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('search/local/{ceps}', [CepController::class, 'cep']);