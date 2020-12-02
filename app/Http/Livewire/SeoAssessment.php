<?php

namespace App\Http\Livewire;

use App\Assessment;
use Livewire\Component;

class SeoAssessment extends Component
{
    public Assessment $client;

    protected $rules = [
        'client.business_name' => 'string',
    ];

    public function mount($uuid = null)
    {
        $this->client = Assessment::findByUuid($uuid);
    }

    public function render()
    {
        return view('livewire.seo-assessment')
            ->extends('frontend.layouts.app')
            ->section('content');
    }
}
