<?php

namespace Web\Installation\Controllers;

use Domain\Installation\Models\Installation;
use App\Http\Controllers\Controller;

class InstallationController extends Controller
{
    /**
     * Display a listing of the installations
     *
     * @param  \Domain\Installation\Models\Installation  $model
     * @return \Illuminate\View\View
     */
    public function index(Installation $model)
    {
        return view('installations.index');
    }

    /**
     * Show the form for creating a new installation
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('installations.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \Domain\Client\Models\Client $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, Client $model)
    {
        $model->create($request->merge([
            'picture' => $request->photo ? $request->photo->store('profile', 'public') : null,
            'password' => Hash::make($request->get('password'))
        ])->all());

        return redirect()->route('clients.index')->withStatus(__('Client successfully created.'));
    }

    /**
     * Show the form for editing the specified installation
     *
     * @param  \Domain\Installation\Models\Installation $installation
     * @return \Illuminate\View\View
     */
    public function edit(Installation $installation)
    {
        return view('installations.edit', ['installation' => $installation->load('role')]);
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
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->withStatus(__('User successfully deleted.'));
    }
}
