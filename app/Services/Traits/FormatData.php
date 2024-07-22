<?php

namespace App\Services\Traits;

trait FormatData
{
    public static function format($data): array
    {
        return [
            'cep' => $data['cep'] ?? '',
            'label' => "{$data['logradouro']}, {$data['localidade']}",
            'logradouro' => $data['logradouro'] ?? '',
            'complemento' => $data['complemento'] ?? '',
            'bairro' => $data['bairro'] ?? '',
            'localidade' => $data['localidade'] ?? '',
            'uf' => $data['uf'] ?? '',
            'ibge' => $data['ibge'] ?? '',
            'gia' => $data['gia'] ?? '',
            'ddd' => $data['ddd'] ?? '',
            'siafi' => $data['siafi'] ?? ''
        ];
    }
}
