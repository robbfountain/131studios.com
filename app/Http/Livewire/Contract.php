<?php

namespace App\Http\Livewire;

use App\Events\ContractWasApproved;
use App\User;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Contract extends Component
{
    public \App\Contract $contract;

    public $signature;

    public function sign()
    {
        $this->validate([
            'signature' => 'required'
        ]);

        $this->contract->update([
            'signature_image' => $this->signature,
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent(),
            'approved_at' => now(),
            'is_approved' => true,
        ]);

        event(new ContractWasApproved(
            $this->contract, User::where('email', $this->contract->user->email)->first()
        ));

        session()->flash('message', 'Thank you');
    }

    public function throwError()
    {
        session()->flash('error', 'You must sign the contract');
    }

    public function clearError()
    {
        session()->flash('error', '');
    }

    public function render()
    {
        return view('livewire.contract');
    }

}
