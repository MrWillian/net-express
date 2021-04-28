<?php

namespace Web\Client\Controllers;

use App\Http\Controllers\Controller;
use Domain\Client\Models\Client;
use Domain\Client\Actions\CreateClientAction;
use Web\Client\Requests\ClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the clients
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new client
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Show the form for editing the specified client
     *
     * @param  \Domain\Client\Models\Client $client
     * @return \Illuminate\View\View
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client->load('role')]);
    }
}
