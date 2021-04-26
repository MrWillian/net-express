<?php

namespace Tests\Unit\Api\Client;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Domain\Client\Models\Client;

class ClientTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    protected $columns = [
        'name',
        'email',
        'birthday',
        'phone_number',
        'client_type',
        'gender',
        'rg',
        'document',
        'cep',
        'country',
        'state',
        'city',
        'district',
        'place',
        'number'
    ];

    /** @test */
    public function check_if_client_columns_is_correct()
    {
        $client = new Client();
        $arrayCompared = array_diff($this->columns, $client->getFillable());
        $this->assertEquals(0, count($arrayCompared));
    }
}
