<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CepResource;
use App\Services\ViaCepService;

class CepController extends Controller
{
    protected ViaCepService $viaCepService;

    public function __construct(ViaCepService $viaCepService)
    {
        $this->viaCepService = $viaCepService;
    }

    public function cep(string $ceps)
    {
        return $this->viaCepService->cep($ceps);
    }
}
