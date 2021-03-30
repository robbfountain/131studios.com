<?php

namespace App\Http\Livewire;

use App\Assessment;
use Livewire\Component;

class SeoAssessment extends Component
{
    /**
     * @var Assessment
     */
    public Assessment $client;

    public $uuid;

    /**
     * @var string[]
     */
    protected $rules = [
        'client.business_name' => ['nullable', 'string'],
        'client.street_address' => ['nullable', 'string'],
        'client.city' => ['nullable', 'string'],
        'client.state' => ['nullable', 'string'],
        'client.zip' => ['nullable', 'string'],
        'client.company_website' => ['nullable', 'string'],
        'client.about' => ['nullable', 'string'],
        'client.phone' => ['nullable', 'string'],
        'client.important_actions' => ['nullable', 'string'],
        'client.success_factors' => ['nullable', 'string'],
        'client.keywords' => ['nullable', 'string'],
        'client.industry' => ['nullable', 'string'],
        'client.target_audience' => ['nullable', 'string'],
        'client.unfair_advantage' => ['nullable', 'string'],
        'client.competitors' => ['nullable', 'string'],
        'client.dont_choose_reasons' => ['nullable', 'string'],
        'client.penalized' => ['nullable', 'string'],
        'client.other_domains' => ['nullable', 'string'],
        'client.anything_else' => ['nullable', 'string'],
    ];

    /**
     * @param null $uuid
     */
    public function mount($uuid = null)
    {
        $this->uuid = $uuid;

        $this->client = Assessment::findByUuid($uuid);
    }

    public function updated($value, $name)
    {
        $this->validate();

        $this->client->save();

        $this->setSessionIdentifier();
    }

    public function saveForm()
    {
        $this->validate();

        $this->client->save();

        $this->setSessionIdentifier();
    }

    protected function setSessionIdentifier()
    {
        if (session()->has('_seo-assessment')) {
            return session('_seo-assessment');
        }

        return session(['_seo-assessment' => $this->client->fresh()->uuid]);
    }

    /**
     * @return mixed
     */
    public function render()
    {
        return view('livewire.seo-assessment')
            ->extends('frontend.layouts.app')
            ->section('content');
    }
}
