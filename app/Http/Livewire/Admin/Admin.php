<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Admin extends Component
{
    public function paymentDoneSuccessfully($user_id){
        User::where('id', $user_id)->update([
            'is_payment_done'   => 1
        ]);
    }
    public function render()
    {
        $users = User::with(['price', 'method'])->get();
        return view('livewire.admin.admin', compact('users') );
    }
}
