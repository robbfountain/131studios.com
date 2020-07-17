<form action="#" method="POST" class="grid grid-cols-1 row-gap-6" wire:submit.prevent="sendEmail">
    <div>
        <label for="full_name" class="sr-only">Full name</label>
        <div class="relative rounded-md shadow-sm">
            <input wire:model="name"
                   id="full_name"
                   class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                   placeholder="Full name"/>
            @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>
    <div>
        <label for="email" class="sr-only">Email</label>
        <div class="relative rounded-md shadow-sm">
            <input wire:model="email"
                   id="email"
                   type="email"
                   class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                   placeholder="Email"/>
            @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>
    <div>
        <label for="phone" class="sr-only">Phone</label>
        <div class="relative rounded-md shadow-sm">
            <input wire:model="phone"
                   id="phone"
                   class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                   placeholder="Phone"/>
            @error('phone') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>
    <div>
        <label for="message" class="sr-only">Message</label>
        <div class="relative rounded-md shadow-sm">
            <textarea wire:model="message"
                      id="message"
                      rows="4"
                      class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                      placeholder="Message">
            </textarea>
            @error('message') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="flex items-center">
        <span class="inline-flex rounded-md shadow-sm">
            <button type="submit"
                    class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                <span wire:loading wire:target="sendEmail">
                    <i class="fal fa-spinner fa-spin mr-1"></i>
                </span>
                Submit
            </button>
        </span>

        @if (session()->has('message'))
            <span class="text-green-500 ml-3">
                {{ session('message') }}
            </span>
        @endif
    </div>
</form>
