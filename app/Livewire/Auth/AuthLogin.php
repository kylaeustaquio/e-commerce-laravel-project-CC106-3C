<?php
/*
namespace App\Livewire\Auth;

use Livewire\Component;

class AuthLogin extends Component
{
    public function render()
    {
        return view('livewire.auth.auth-login');
    }
}

*/

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthLogin extends Component
{
    public $email;
    public $password;

    public function login()
    {
       
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

       
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
          
            return redirect()->route('livewire.auth.auth-dashboard'); 
        }

        
        session()->flash('error', 'Invalid credentials.');
    }

    public function render()
    {
        return view('livewire.auth.auth-login');
    }
}

