<div>
    <div class="max-w-2xl mx-auto xs:px-4 mt-10">
        @if(session()->has('success'))
            <div>
                {{session()->get('success')}}
            </div>
        @endif
        <form wire:submit.prevent="analyze" class="flex items-start justify-center" >
            <label for="url" class="sr-only">Website URL</label>
            <div class="flex-1">
                <input wire:model.debounce.365ms="url" id="url" type="text"
                       class="w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm {{$errors->has('url') ? 'border-red-500' : 'border-gray-300' }} rounded-md"
                       placeholder="Enter your website URL">
                @error('url')<div class="block text-red-500 text-sm">{{$message}}</div>@enderror
            </div>
            <button
                    data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"
                    data-callback='onClick'
                    data-action='submit'
                    class="g-recaptcha ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Analyze
            </button>
        </form>
    </div>
    @if(!$this->pageInsights)
        <div wire:loading.remove class="max-w-2xl mx-auto py-10 xs:px-2">
            <h2 class="text-xl text-gray-700">About our Website Analyzer</h2>
            <div class="text-gray-500 text-base">
                This tool will analyze the speed of your website and provide recommendations for speeding it up.
                Page speed has a direct impact on Search Enging Optimization (SEO) which determins where your website
                ranks on search engines such as Google
            </div>
        </div>
    @endif
    <div class="hidden max-w-2xl mx-auto mt-10" wire:loading.class.remove="hidden">
        <div class="text-center text-lg text-gray-500">
            Sit tight. We are analyzing your site...
        </div>

        <div class="max-w-4xl mx-auto pb-12 sm:pb-16 mt-10">
            <div class="relative max-w-4xl mx-auto 8">
                <div class="max-w-6xl mx-auto">
                    <div class="animate-pulse rounded-lg bg-gray-100 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
                        <div class="sm:rounded-tr-none relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                            <span class="text-transparent rounded-lg inline-flex p-3 bg-gray-200 text-sm font-bold ring-4 ring-white">
                                1.0
                            </span>
                            <div class="mt-8">
                                <h3 class="text-lg text-transparent font-medium">
                                    <div class="w-2/3 focus:outline-none bg-gray-200 rounded-lg">
                                        Lorem Ipsum
                                    </div>
                                </h3>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                            </div>
                        </div>

                        <div class="sm:rounded-tr-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                            <span class="text-transparent rounded-lg inline-flex p-3 bg-gray-200 text-sm font-bold ring-4 ring-white">
                                1.0
                            </span>
                            <div class="mt-8">
                                <h3 class="text-lg text-transparent font-medium">
                                    <div class="w-2/3 focus:outline-none bg-gray-200 rounded-lg">
                                        Lorem Ipsum
                                    </div>
                                </h3>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                            </div>
                        </div>

                        <div class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                            <span class="text-transparent rounded-lg inline-flex p-3 bg-gray-200 text-sm font-bold ring-4 ring-white">
                                1.0
                            </span>
                            <div class="mt-8">
                                <h3 class="text-lg text-transparent font-medium">
                                    <div class="w-2/3 focus:outline-none bg-gray-200 rounded-lg">
                                        Lorem Ipsum
                                    </div>
                                </h3>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                            </div>
                        </div>

                        <div class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                            <span class="text-transparent rounded-lg inline-flex p-3 bg-gray-200 text-sm font-bold ring-4 ring-white">
                                1.0
                            </span>
                            <div class="mt-8">
                                <h3 class="text-lg text-transparent font-medium">
                                    <div class="w-2/3 focus:outline-none bg-gray-200 rounded-lg">
                                        Lorem Ipsum
                                    </div>
                                </h3>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                            </div>
                        </div>

                        <div class="sm:rounded-bl-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                            <span class="text-transparent rounded-lg inline-flex p-3 bg-gray-200 text-sm font-bold ring-4 ring-white">
                                1.0
                            </span>
                            <div class="mt-8">
                                <h3 class="text-lg text-transparent font-medium">
                                    <div class="w-2/3 focus:outline-none bg-gray-200 rounded-lg">
                                        Lorem Ipsum
                                    </div>
                                </h3>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                            </div>
                        </div>

                        <div class="rounded-bl-lg rounded-br-lg sm:rounded-bl-none relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                            <span class="text-transparent rounded-lg inline-flex p-3 bg-gray-200 text-sm font-bold ring-4 ring-white">
                                1.0
                            </span>
                            <div class="mt-8">
                                <h3 class="text-lg text-transparent font-medium">
                                    <div class="w-2/3 focus:outline-none bg-gray-200 rounded-lg">
                                        Lorem Ipsum
                                    </div>
                                </h3>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                                <p class="mt-2 text-sm text-transparent bg-gray-200">
                                    Lorem Ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($this->pageInsights)
        <x-stats-section class="pb-4 sm:pb-4 mt-10">
            <x-slot name="title">
                Performance Score
            </x-slot>
            <x-stats-container class="py-10 mt-4">
                <svg viewBox="0 0 36 36"
                     class="circular-chart">
                    <path class="circle-bg"
                          d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle {{$this->pageInsights->score() <= 49 ? 'danger' : ($this->pageInsights->score() <= 89 ? 'warning' : 'success')}}"
                          d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831"
                          fill="none"
                          stroke="#444" ;
                          stroke-width="1" ;
                          stroke-dasharray="{{$this->pageInsights->score()}}, 100"
                    />
                    <text x="18" y="20.35" class="percentage">{{$this->pageInsights->score()}}</text>
                </svg>
                <h2 class="text-2xl text-center pt-4">
                    {{$url}}
                </h2>

                <div class="mt-4 py-2 mx-auto max-w-xs rounded-full border border-gray-300">
                    <div class="flex justify-center text-sm">
                        <div class="flex items-center">
                            <div class="mr-2 bg-red-500 rounded-full h-3 w-3">&nbsp; &nbsp;</div>
                            <span>0-49</span>
                        </div>
                        <div class="ml-4 flex items-center">
                            <div class="mr-2 bg-yellow-500 rounded-full h-3 w-3">&nbsp; &nbsp;</div>
                            <span>50-89</span>
                        </div>
                        <div class="ml-4 flex items-center">
                            <div class="mr-2 bg-green-500 rounded-full h-3 w-3">&nbsp; &nbsp;</div>
                            <span>90-100</span>
                        </div>
                        <div class="ml-3">
                            <a class="text-gray-500 hover:text-gray-600" href="https://web.dev/performance-scoring"
                               target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


            </x-stats-container>

        </x-stats-section>

        <x-stats-section class="max-w-4xl mx-auto">
            <div class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
                <div class="sm:rounded-tr-none relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                    <x-score :type="\App\Classes\PageInsights::FIRST_CONTENTFUL_PAINT"
                             :score="$this->pageInsights->firstContentfulPaint()">
                        {{$this->pageInsights->firstContentfulPaint()}}
                    </x-score>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <div class="focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                {{--                        <span class="absolute inset-0" aria-hidden="true"></span>--}}
                                First Contentful Paint
                            </div>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500 parsedown">
                            {!! parsedown($this->pageInsights->get('first-contentful-paint.description'),true)!!}
                        </p>
                    </div>
                </div>

                <div class="sm:rounded-tr-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                    <div>
                        <x-score :type="\App\Classes\PageInsights::SPEED_INDEX"
                                 :score="$this->pageInsights->speedIndex()">
                            {{$this->pageInsights->speedIndex()}}
                        </x-score>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <div class="focus:outline-none">
                                Speed Index
                            </div>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500 parsedown">
                            {!! parsedown($this->pageInsights->get('speed-index.description'),true) !!}
                        </p>
                    </div>
                </div>

                <div class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                    <div>
                        <x-score :type="\App\Classes\PageInsights::LARGEST_CONTENTFUL_PAINT"
                                 :score="$this->pageInsights->largestContentfulPaint()">
                            {{$this->pageInsights->largestContentfulPaint()}}
                        </x-score>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <div class="focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                {{--                        <span class="absolute inset-0" aria-hidden="true"></span>--}}
                                Largest Contentful Paint
                            </div>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500 parsedown">
                            {!! parsedown($this->pageInsights->get('largest-contentful-paint.description'),true)!!}
                        </p>
                    </div>
                </div>

                <div class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                    <div>
                        <x-score :type="\App\Classes\PageInsights::CUMULATIVE_LAYOUT_SHIFT"
                                 :score="$this->pageInsights->cumulativeLayoutShift()">
                            {{$this->pageInsights->cumulativeLayoutShift()}}
                        </x-score>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <div class="focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                {{--                        <span class="absolute inset-0" aria-hidden="true"></span>--}}
                                Cumulative Layout Shift
                            </div>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500 parsedown">
                            {!! parsedown($this->pageInsights->get('cumulative-layout-shift.description'),true)!!}
                        </p>
                    </div>

                </div>

                <div class="sm:rounded-bl-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                    <div>
                        <x-score :type="\App\Classes\PageInsights::TIME_TO_INTERACTIVE"
                                 :score="$this->pageInsights->timeToInteractive()">
                            {{$this->pageInsights->timeToInteractive()}}
                        </x-score>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <div class="focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                {{--                        <span class="absolute inset-0" aria-hidden="true"></span>--}}
                                Time to Interactive
                            </div>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500 parsedown">
                            {!! parsedown($this->pageInsights->get('interactive.description'),true)!!}
                        </p>
                    </div>

                </div>

                <div class="rounded-bl-lg rounded-br-lg sm:rounded-bl-none relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                    <div>
                        <x-score :type="\App\Classes\PageInsights::TOTAL_BLOCKING_TIME"
                                 :score="$this->pageInsights->totalBlockingTime()">
                            {{$this->pageInsights->totalBlockingTime()}}
                        </x-score>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium">
                            <div class="focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                {{--                        <span class="absolute inset-0" aria-hidden="true"></span>--}}
                                Total Blocking Time
                            </div>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500 parsedown">
                            {!! parsedown($this->pageInsights->get('total-blocking-time.description'),true)!!}
                        </p>
                    </div>
                </div>
            </div>
        </x-stats-section>

        <x-stats-section>
            <div class="grid grid-cols-2 ">
                <div class="mr-4">
                    <img class="h-96 w-100 mr-4 rounded-sm border border-gray-200 shadow"
                         src="{{$this->pageInsights->get('final-screenshot.details.data')}}" alt="">
                </div>
                <div class="w-full grid grid-cols-4 gap-4">
                    @foreach($this->pageInsights->get('screenshot-thumbnails.details.items') as $item)
                        <img class="h-24 w-24 mr-4 rounded-sm border border-gray-200 shadow" src="{{$item['data']}}"
                             alt="">
                    @endforeach
                </div>
            </div>
        </x-stats-section>
    @endif

    @push('scripts')
        <script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_SITE_KEY')}}"></script>
        <script>
            function onClick(e) {
                console.log('here');
                e.preventDefault();
                grecaptcha.ready(function () {
                    grecaptcha.execute('{{env('RECAPTCHA_SITE_KEY')}}', {action: 'submit'}).then(function (token) {
                        @this.set('captcha', token);
                    });
                })
            }
        </script>
    @endpush

</div>
