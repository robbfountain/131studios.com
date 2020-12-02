<x-banner>
    SEO <span class="text-blue-500">Assessment</span>
    <x-slot name="subtitle">Please take a few minutes to answer some questions so we can better understand how your
        business works.
    </x-slot>
</x-banner>

<section class="py-12 bg-white max-w-screen-xl mx-auto">
    <h2 class="text-2xl tracking-tight leading-10 font-bold text-gray-900 sm:leading-none">
        About this Assessment</h2>
    <p class="text-lg text-gray-600 mt-4 leading-none">The questions below will help us understand how your business
        functions on the internet and what steps we can take to improve your overall search ranking</p>
    <p class="text-lg text-gray-600 mt-4 leading-none">Most questions are optional but we highly recommend you take the
        time to answer them in detail. The more details you provide, the better we are able to help.</p>
    <p class="text-lg text-gray-600 mt-4 leading-none">The form should only take about <span class="font-bold">20 - 30
            minutes</span> to complete and your answers will only help improve your search engine ranking</p>
    <p class="text-lg text-gray-600 mt-4 leading-none">Your progress will be saved automatically as you go and you can
        come back and finish at any time. When you are done submit the form and we will get back to you.</p>
</section>

<section class="py-12 mt-8 bg-gray-50">
    @if(!$client)
        <div class="max-w-screen-xl mx-auto">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">About Your Business</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            This section will gather some general information about your business.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-5">
                                        <label for="business_name" class="block text-sm font-medium text-gray-700">
                                            Business Name
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input wire:model="client.business_name"
                                                   type="text" id="business_name"
                                                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4 lg:col-span-5  ">
                                        <label for="company_website" class="block text-sm font-medium text-gray-700">
                                            Website
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                http://
                                            </span>
                                            <input wire:model="company_website"
                                                   type="text" id="company_website"
                                                   class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                   placeholder="www.example.com">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4 lg:col-span-5">
                                        <label for="street_address" class="block text-sm font-medium text-gray-700">Street
                                            address</label>
                                        <input wire:model="street_address"
                                               type="text" name="street_address" id="street_address"
                                               autocomplete="street-address"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                        <input wire:model="city"
                                               type="text" name="city" id="city"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                                        <input wire:model="state"
                                               type="text" name="state" id="state"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="zip" class="block text-sm font-medium text-gray-700">Zip</label>
                                        <input wire:model="zip"
                                               type="text" name="zip" id="zip" autocomplete="zip"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="about" class="block text-sm font-medium text-gray-700">
                                            About
                                        </label>
                                        <div class="mt-1">
                                            <textarea wire:model="about"
                                                      id="about" name="about" rows="3"
                                                      class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                                      placeholder="ABC Company sells widgets"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            Brief description of your business. What do you sell?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 max-w-screen-xl mx-auto">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            This section lets us know how to contact you.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">First
                                            name</label>
                                        <input wire:model="first_name"
                                               type="text" name="first_name" id="first_name" autocomplete="given-name"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last
                                            name</label>
                                        <input wire:model="last_name"
                                               type="text" name="last_name" id="last_name" autocomplete="family-name"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email
                                            address</label>
                                        <input wire:model="email"
                                               type="text" name="email" id="email" autocomplete="email"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone
                                            number</label>
                                        <input wire:model="phone"
                                               type="text" name="phone" id="phone" autocomplete="phone"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>
    @endif

    <div class="mt-10 sm:mt-0 max-w-screen-xl mx-auto">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Goals &amp; Expectations</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        This section gathers information about your goals regarding Search Engine Optimization.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div>
                            <label for="important_actions" class="block text-sm font-medium text-gray-700">
                                What actions on your website are most important to you?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="important_actions"
                                          id="important_actions" name="important_actions" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Is it store purchases, webinar sign ups, white paper downloads, free trials, newsletter
                                sign-ups, form submits, or something else?
                            </p>
                        </div>

                        <div class="mt-6">
                            <label for="success_factors" class="block text-sm font-medium text-gray-700">
                                What does success for this engagement look like?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="success_factors"
                                          id="success_factors" name="success_factors" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Is it specific traffic numbers, sales volume increase, ranking increase?
                            </p>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0 max-w-screen-xl mx-auto">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Your Customers</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        This section gathers information about how customers find you on the internet
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div>
                            <label for="keywords" class="block text-sm font-medium text-gray-700">
                                What do customers search for to fid you (Keywords)?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="keywords"
                                          id="keywords" name="keywords" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                These are what customers search for on Google to find your business. List as many
                                keywords as you can think.
                            </p>
                        </div>

                        <div class="mt-6">
                            <label for="industry" class="block text-sm font-medium text-gray-700">
                                What specific industry(ies) do you target?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="industry"
                                          id="industry" name="industry" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                The more information the better.
                            </p>
                        </div>

                        <div class="mt-6">
                            <label for="target_audience" class="block text-sm font-medium text-gray-700">
                                Who is your target audience or ideal customer?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="target_audience"
                                          id="target_audience" name="target_audience" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                The more information the better.
                            </p>
                        </div>

                        <div class="mt-6">
                            <label for="unfair_advantage" class="block text-sm font-medium text-gray-700">
                                What are your company's unfair advantages?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="unfair_advantage"
                                          id="unfair_advantage" name="unfair_advantage" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Why do your customers choose you? What problems do you solve for them? What's differnt
                                about you than your competitors?
                            </p>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0 max-w-screen-xl mx-auto">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Your Competitors</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        This section gathers information about your competitors which helps us develop a successful SEO
                        strategy for you.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div>
                            <label for="competitors" class="block text-sm font-medium text-gray-700">
                                Who are your biggest competitors
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                    http://
                                </span>
                                <input wire:model="competitors" type="text" name="competitors" id="competitors"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none sm:text-sm border-gray-300"
                                       placeholder="www.example.com">
                                <span class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                    +
                                </span>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                List up to 5 of your biggest competitors web sites
                            </p>
                        </div>

                        <div class="mt-6">
                            <label for="dont_choose_reasons" class="block text-sm font-medium text-gray-700">
                                What are some key reasons your best prospects <span class="font-bold">don’t</span>
                                choose you?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="dont_choose_reasons"
                                          id="dont_choose_reasons" name="dont_choose_reasons" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                What does your largest competitor do well that you may struggle with?
                            </p>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0 max-w-screen-xl mx-auto">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Known Issues</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        If there are known tracking or SEO issues or just things you vaguely suspect could be problems?
                        We want to know about them.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div>
                            <label for="penalized" class="block text-sm font-medium text-gray-700">
                                Has the site been penalized (to your knowledge)?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="penalized"
                                          id="penalized" name="penalized" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                If there’s been a significant traffic drop in the past, do you know or suspect why that
                                may have occurred?
                            </p>
                        </div>

                        <div class="mt-6">
                            <label for="other_domains" class="block text-sm font-medium text-gray-700">
                                Are there other domains you own?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="other_domains"
                                          id="other_domains" name="other_domains" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0 max-w-screen-xl mx-auto">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Additional Information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Is there anything else we need to know?
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div>
                            <label for="anything_else" class="block text-sm font-medium text-gray-700">
                                Is there anything else we should know or that you’d like us to focus on?
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="anything_else"
                                          id="anything_else" name="anything_else" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder=""></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Leave your shyness at the door. If there is anything we missed or you think we need to
                                know give us the details.
                            </p>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
