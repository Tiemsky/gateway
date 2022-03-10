<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Models\Price;

class AddUser extends Component
{
    public $first_name, $last_name, $email, $salary,$success_message;

    public function addUser(){
       $this->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'salary'     => ['required', 'integer'],
        ]);



        $user = User::create([
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'email'      => $this->email,
            'password'   => Hash::make('password'),
        ]);

        Price::create([
            'user_id'   => $user->id,
            'salary'    => $this->salary
        ]);

      
        $this->reset();
        $this->success_message = 'submitted successfully!';
         Mail::to($user->email)->send(new WelcomeMail($user));
    }
    public function render()
    {
        return view('livewire.add-user');
    }
}
