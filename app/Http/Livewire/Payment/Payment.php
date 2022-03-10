<?php

namespace App\Http\Livewire\Payment;

use App\Models\MethodOfPayment;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Payment extends Component
{
    public $status, $next=false, $pay, $success_message;

    public $email, $payment_method, $phone, $salary;

    public function updatedPaymentMethod(){
        if($this->payment_method== 'cash'){
            $this->pay = true;
        }else{
            $this->pay = false;
        }
    }

    public function updatedEmail(){
        $this->validate([
            'email' => 'required|exists:users,email'
        ]);

      
    }

    

    public function proceedToNext(){
       
        $user = User::with(['price'])->where('email', $this->email)->first();
     
       if($user){
        $this->salary = $user->price->salary;
        $this->next = !$this->next;
       }
       
    }

    public function submit(){
      $data = $this->validate([
            'email' => 'required|exists:users,email',
            'payment_method' =>'required',
            'phone' => 'required'
        ]);

        MethodOfPayment::create([
            'user_id' => Auth::user()->id,
            'account_number'   => $this->phone,
            'method'   => $this->payment_method,
        ]);

        $this->reset();
        $this->success_message = 'submitted successfully!';

    }
    public function render()
    {
        return view('livewire.payment.payment');
    }
}
