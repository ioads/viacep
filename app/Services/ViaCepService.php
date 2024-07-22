<?php

namespace App\Services;

use App\Services\Traits\FormatData;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ViaCepService
{
    use FormatData;

    protected Client $client;
    protected $baseUrl;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->baseUrl = config('services.viacep.baseurl');
    }

    /**
     * @throws GuzzleException
     */
    public function cep(string $ceps)
    {
        $arrayCeps = explode(',', $ceps);

        $responseCeps = [];

        foreach($arrayCeps as $cep) {
            if(preg_match('/^\d{8}$/', $cep)) {
                $response = $this->client->get($this->baseUrl . $cep . '/json');

                if($response->getStatusCode() == 200) {
                    $decodedResponse = json_decode($response->getBody()->getContents(), true);

                    if(!isset($decodedResponse['erro'])) {
                        $responseCeps[] = FormatData::format($decodedResponse);
                    }
                }
            }
        }

        return $responseCeps;
    }
}
