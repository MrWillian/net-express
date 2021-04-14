<?php

namespace Web\Employee\Controllers;

use Domain\Employee\Models\Employee;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the employees
     *
     * @param  \Domain\Employee\Models\Employee  $model
     * @return \Illuminate\View\View
     */
    public function index(Employee $model)
    {
        return view('employees.index');
    }

    /**
     * Show the form for creating a new employee
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('employees.create');
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
     * Show the form for editing the specified employee
     *
     * @param  \Domain\Employee\Models\Employee $employee
     * @return \Illuminate\View\View
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee' => $employee->load('role')]);
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
