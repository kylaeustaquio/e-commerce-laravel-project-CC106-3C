<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function order()
    {
        return view('livewire.auth.auth-order');
    }
}
