<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyBankStatement extends Component
{
    public function render()
    {
        $user = User::with(['price','method'])->where('id',Auth::user()->id)->first();
        return view('livewire.my-bank-statement', compact('user'));
    }
}
