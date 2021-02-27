<form action="#" method="POST" class="grid grid-cols-1 gap-y-6" wire:submit.prevent="sendEmail">
    <div>
        <label for="full_name" class="sr-only">Full name</label>
        <input wire:model="name"
               id="full_name"
               autocomplete="name"
               class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 border border-gray-300 rounded-md"
               placeholder="Full name"/>
        @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="email" class="sr-only">Email</label>
        <input wire:model="email"
               id="email"
               type="email"
               autocomplete="email"
               class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 border border-gray-300 rounded-md"
               placeholder="Email"/>
        @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="phone" class="sr-only">Phone</label>
        <input wire:model="phone"
               id="phone"
               autocomplete="phone"
               class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 border border-gray-300 rounded-md"
               placeholder="Phone"/>
        @error('phone') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="message" class="sr-only">Message</label>
        <textarea wire:model="message"
                  id="message"
                  rows="4"
                  class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 border border-gray-300 rounded-md"
                  placeholder="Message">
        </textarea>
        @error('message') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="flex items-center">
        <span class="inline-flex rounded-md shadow-sm">
            <button type="submit"
                    class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                <span wire:loading wire:target="sendEmail">
                    <i class="fal fa-spinner fa-spin mr-1"></i>
                </span>
                Submit
            </button>
        </span>

        @if (session()->has('message'))
            <span class="text-green-500 ml-3">
                <i class="far fa-check mr-2"></i>
                {{ session('message') }}
            </span>
        @endif
    </div>
</form>
