<?php

namespace Domain\Client\Actions;

use Domain\Client\DataTransferObjects\ClientData;
use Domain\Client\Models\Client;

final class CreateClientAction {
    public function __invoke(ClientData $clientData): Client {
        return Client::create([
            'name' => $clientData->name,
            'email' => $clientData->email,
            'phone_number' => $clientData->phone_number,
            'client_type' => $clientData->client_type,
            'gender' => $clientData->gender,
            'rg' => $clientData->rg,
            'document' => $clientData->document,
            'cep' => $clientData->cep,
            'country' => $clientData->country,
            'state' => $clientData->state,
            'city' => $clientData->city,
            'district' => $clientData->district,
            'place' => $clientData->place,
            'number' => $clientData->number
        ]);
    }
}