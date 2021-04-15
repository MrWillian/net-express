<?php

namespace Web\ClientMap\Controllers;

use App\Http\Controllers\Controller;

class ClientMapController extends Controller
{
    public function index()
    {
        return view('clientsMap.index');
    }
}
