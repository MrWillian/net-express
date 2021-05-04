<?php

namespace Api\Client\Services;

use Domain\Client\Models\Client;
use Api\Client\Exceptions\ClientNotFoundException;

class ClientService {
    public function findClientById($id) {
        $client = Client::find($id);
        if (!$client) {
            throw new ClientNotFoundException('Client not found!');
        }
        return $client;
    }
}