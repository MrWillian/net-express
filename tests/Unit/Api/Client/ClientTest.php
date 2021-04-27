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

    /** @test */
    public function check_if_can_list_clients()
    {
        $clients = factory(Client::class, 2)->create()->map(function ($client) {
            return $client->only($this->columns);
        });

        $this->get(route('client.index'))
            ->assertStatus(200)
            ->assertJson($clients->toArray())
            ->assertJsonStructure(['*' => $this->columns]);
    }

    /** @test */
    public function check_if_can_create_client() {
        $clientType = random_int(1, 2);
        $gender = ["M", "F"];
        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->e164PhoneNumber,
            'client_type' => $clientType,
            'gender' => $gender[random_int(0, 1)],
            'rg' => strval($this->faker->numberBetween(000000000000, 999999999999)),
            'documentValue' => $clientType === 1 
                ? strval($this->faker->numberBetween(00000000000, 99999999999)) 
                : strval($this->faker->numberBetween(00000000000000, 99999999999999)),
            'cep'  => $this->faker->postcode,
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'district' => $this->faker->streetName,
            'place' => $this->faker->streetAddress,
            'number' => $this->faker->buildingNumber
        ];

        $response = $this->post(route('client.store'), $data)->assertStatus(201)->assertJson(['status' => 'success']);
    }

    /** @test */
    public function check_if_can_update_client() {
        $client = factory(Client::class)->create();
        $data = ['name' => $this->faker->name];
        $this->put(route('client.update', $client->id), $data)->assertStatus(200)->assertJson($data);
    }

    /** @test */
    public function check_if_can_show_client() {
        $client = factory(Client::class)->create();
        $this->get(route('client.show', $client->id))->assertStatus(200);
    }

    /** @test */
    public function check_if_can_delete_client() {
        $client = factory(Client::class)->create();
        $this->delete(route('client.destroy', $client->id))->assertStatus(204);
    }
}
