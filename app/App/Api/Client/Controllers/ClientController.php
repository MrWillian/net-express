<?php

namespace Api\Client\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Domain\Client\Models\Client;
use Domain\Client\DataTransferObjects\ClientData;
use Domain\Client\Actions\CreateClientAction;
use Domain\Client\Actions\UpdateClientAction;
use Domain\Client\Actions\DeleteClientAction;
use Api\Client\Requests\ClientRequest;
use Api\Client\Services\ClientService;
use Api\Client\Exceptions\ClientNotFoundException;

class ClientController extends Controller
{
    /**
     * Return a listing of the clients
     *
     * @return \Domain\Client\Models\Client[] $clients
     */
    public function index()
    {
        $clients = app(Client::class)::orderBy('id', 'DESC')->get();
        return $clients;
    }

    /**
     * Store a newly created client in storage
     *
     * @param  \Api\Client\Requests\ClientRequest $request
     * @param  \Domain\Client\Actions\CreateClientAction $action
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ClientRequest $request, CreateClientAction $action)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return response()->json(array('status' => 'error', 'errors' => $request->validator->errors()), 422);
        }

        $client = $action(ClientData::fromRequest($request));

        return response()->json(array(
            'status' => 'success',
            'message' => __('Client successfully created.'),
            'data' => $client
        ), 201);
    }

    /**
     * Update the specified user in storage
     *
     * @param  \Api\Client\Requests\ClientRequest $request
     * @param  \Domain\Client\Models\Client $client
     * @param  \Domain\Client\Actions\UpdateClientAction $action
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ClientRequest $request, Client $client, UpdateClientAction $action)
    {
        try {
            $client = $action($request->all(), $client);
        } catch (Exception $exception) {
            return response()->json(['status' => 'error', 'message' => $exception->message], 500);
        }

        return response()->json(array(
            'status' => 'success',
            'message' => __('Client successfully updated.'),
            'data' => $client
        ), 200);
    }

    /**
     * Display the specified client
     * 
     * @param  \Domain\Client\Models\Client $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($id) {
        try {
            $client = (new ClientService)->findClientById($id);
        } catch(ClientNotFoundException $exception) {
            return response()->json(array('error' => $exception->getMessage()), 404);
        }
        return response()->json(array('status' => 'success', 'data' => $client), 200);
    }

    /**
     * Remove the specified client from storage
     *
     * @param  \Domain\Client\Models\Client $client
     * @param  \Domain\Client\Actions\DeleteClientAction $action
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Client $client, DeleteClientAction $action)
    {
        $action($client);
        return response()->json(array('status' => 'success', 'message' => __('Client successfully deleted.')), 200);
    }
}
