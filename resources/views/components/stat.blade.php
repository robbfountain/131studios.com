@props([
    'status' => 'up',
    'range' => false
])

@php
    if(!$range)
        {
             $status = [
            'up' => 'bg-green-100 text-green-700',
            'valid' => 'bg-green-100 text-green-700',
            'not yet checked' => 'bg-gray-100 text-gray-800',
            'invalid' => 'bg-red-100 text-red-700',
            'down' => 'bg-red-100 text-red-700'
        ][$status];
        }
        else {
            if($status > 95)
                $status = 'bg-green-100 text-green-700';
            else {
                $status = 'bg-red-100 text-red-700';
            }
        }

@endphp

<div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
    <dt class=" order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
        {{$title}}
    </dt>
    <dd class="order-1 text-4xl w-1/2 mx-auto py-2 px-4 rounded-lg {{$status}}">
        {{$slot}}
    </dd>
</div>
