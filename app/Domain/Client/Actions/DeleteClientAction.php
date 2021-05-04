<?php

namespace Domain\Client\Actions;

use Domain\Client\Models\Client;

final class DeleteClientAction {
    public function __invoke(Client $client) {
        $client->delete();
    }
}