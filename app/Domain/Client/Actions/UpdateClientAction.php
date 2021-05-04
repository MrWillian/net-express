<?php

namespace Domain\Client\Actions;

use Domain\Client\DataTransferObjects\ClientData;
use Domain\Client\Models\Client;

final class UpdateClientAction {
    public function __invoke($request, Client $client): Client {
        if ($request['documentValue']) {
            $client->document = str_replace(['.', '-', '/'], '', strval($request['documentValue']));
        }

        $client->update($request);
        return $client;
    }
}