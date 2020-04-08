@extends('frontend.layouts.app')

@section('content')
    <x-banner>
        <div class="container mx-auto text-center">
            <h1 class="px-3 py-3 mb-8 inline-block text-center text-gray-500 font-normal tracking-wide text-4xl mt-6 mb-1"
                style="background-color: rgba(0,0,0,0.5)">
                Contact Us
            </h1>
        </div>
    </x-banner>

    <div class="relative bg-white">
        <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
        </div>
        <contact inline-template>
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
            <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                <div class="max-w-lg mx-auto">
                    <h2 class="text-2xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
                        Get in touch
                    </h2>
                    <p class="mt-3 text-lg leading-6 text-gray-500">
                       Drop us a line using the form opposite.  We can also be reached via any of the methods below.
                    </p>
                    <dl class="mt-8 text-base leading-6 text-gray-500">
                        <div>
                            <dt class="sr-only">Postal address</dt>
                            <dd>
                                <p>545 Scarlet Circle</p>
                                <p>Greencastle, PA 17225</p>
                            </dd>
                        </div>
                        <div class="mt-6">
                            <dt class="sr-only">Phone number</dt>
                            <dd class="flex">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span class="ml-3">
                                    +1 (301) 992-0962
                                </span>
                            </dd>
                        </div>
                        <div class="mt-3">
                            <dt class="sr-only">Email</dt>
                            <dd class="flex">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="ml-3">
                                    robb@131studios.com
                                </span>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                <div class="max-w-lg mx-auto lg:max-w-none">
                    <form action="#" method="POST" class="grid grid-cols-1 row-gap-6" @submit.prevent>
                        <div>
                            <label for="full_name" class="sr-only">Full name</label>
                            <div class="relative rounded-md shadow-sm">
                                <input v-model="form.name" id="full_name" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Full name" />
                            </div>
                        </div>
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <div class="relative rounded-md shadow-sm">
                                <input v-model="form.email" id="email" type="email" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Email" />
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="sr-only">Phone</label>
                            <div class="relative rounded-md shadow-sm">
                                <input v-model="form.phone" id="phone" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Phone" />
                            </div>
                        </div>
                        <div>
                            <label for="message" class="sr-only">Message</label>
                            <div class="relative rounded-md shadow-sm">
                                <textarea v-model="form.message" id="message" rows="4" class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="">
                            <span class="inline-flex rounded-md shadow-sm">
                                <button @click="send" type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-800 hover:bg-blue-700 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                    Submit
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </contact>
    </div>
@stop
