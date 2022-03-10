<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{

    public $current_password, $new_password, $password_confirmation;
    public function changePassword()
    {
        $this->validate([
            'current_password'   => ['required', new MatchOldPassword],
            'new_password'  => 'required|min:8',
            'password_confirmation' => 'same:new_password'
        ]);
        User::find(auth()->user()->id)->update(['password'=> Hash::make($this->new_password)]);
        Auth::logout();
        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.auth.change-password');
    }
}
