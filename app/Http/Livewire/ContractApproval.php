<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContractApproval extends Component
{
    public $contract;
    public $name;

    protected $rules = [
        'name' => 'required|min:6',
    ];
    
    public function approve()
    {
        $this->validate();

        $this->contract->update([
            'is_approved' => true,
            'approved_by' => $this->name,
            'approved_at' => now(),
        ]);

        $this->dispatchBrowserEvent('contract-approved');
    }

    public function render()
    {
        return view('livewire.contract-approval');
    }
}
