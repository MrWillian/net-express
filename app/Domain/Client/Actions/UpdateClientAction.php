<?php

namespace Domain\Client\Actions;

use Domain\Client\DataTransferObjects\ClientData;
use Domain\Client\Models\Client;

final class UpdateClientAction {
    public function __invoke($request, Client $client): Client {
        $client->update($request);
        return $client;
    }
}