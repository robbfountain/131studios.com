<?php

namespace App\Http\Livewire;

use Http;
use App\PageInsight;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Classes\PageInsights;
use App\Classes\PageInsightsResponse;
use Illuminate\Support\Facades\Request;

class SiteAnalysis extends Component
{
    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var int
     */
    public $captcha = 0;

    /**
     * @var PageInsights|null
     */
    protected ?PageInsights $pageInsights = null;
    /**
     * @var string[]
     */
    protected array $rules = [
        'url' => 'required|url',
    ];

    public function updatedCaptcha($token)
    {
        dd('here');
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret='.env('RECAPTCHA_SECRET_KEY').'&response='.$token);
        $this->captcha = $response->json()['score'];

        if (!$this->captcha > .3) {
            dd('i worked');
            $this->analyze();
        } else {
            return session()->flash('success', 'Google thinks you are a bot, please refresh and try again');
        }
    }

    /**
     *
     */
    public function analyze()
    {
        $this->validate();

        $this->pageInsights = PageInsights::make(
            PageInsightsResponse::createForUrl($this->url)
        );

       PageInsight::create([
            'uuid' => Str::uuid(),
            'url' => $this->url,
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent(),
        ]);

    }

    /**
     * @return PageInsights
     */
    public function getPageInsightsProperty(): PageInsights
    {
        return $this->pageInsights;
    }

    public function render()
    {
        return view('livewire.site-analysis');
    }
}
