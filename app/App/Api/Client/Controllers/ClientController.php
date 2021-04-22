<?php

namespace Api\Client\Controllers;

use App\Http\Controllers\Controller;
use Domain\Client\Models\Client;
use Domain\Client\DataTransferObjects\ClientData;
use Domain\Client\Actions\CreateClientAction;
use Domain\Client\Actions\DeleteClientAction;
use Api\Client\Requests\ClientRequest;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Return a listing of the clients
     *
     * @return \Domain\Client\Models\Client[] $clients
     */
    public function index()
    {
        $clients = app(Client::class)->get();
        return $clients;
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
     * Store a newly created client in storage
     *
     * @param  \Api\Client\Requests\ClientRequest $request
     * @param  \Domain\Client\Actions\CreateClientAction $action
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ClientRequest $request, CreateClientAction $action)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            $response = array('status' => 'error', 'errors' => $request->validator->errors());
            return response()->json($response, 422);
        }
        $action(ClientData::fromRequest($request));
        return response()->json(['success' => __('Client successfully created.')], 200);
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

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $hasPassword = $request->get('password');
        $user->update(
            $request->merge([
                'picture' => $request->photo ? $request->photo->store('profile', 'public') : $user->picture,
                'password' => Hash::make($request->get('password'))
            ])->except([$hasPassword ? '' : 'password'])
        );

        return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
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
        return redirect()->route('web.client.index')->withStatus(__('Client successfully deleted.'));
    }
}
