<div class="mb-8">
    <div class="flex items-center">
        <div class="mr-4">
            <div class="rounded-full h-8 w-8 overflow-hidden flex justify-center items-center">
                <img src="{{$mention->author_photo_url}}"
                     alt="{{$mention->author_url}}">
            </div>

        </div>
        <div class="flex-1 text-gray-700">
            <a class="font-bold"
               href="{{$mention->author_url}}">{{$mention->author_name}}</a> <a
                    href="{{$mention->interaction_url}}"
                    class="underline">{{$mention->type}}</a>
            on {{$mention->created_at->format('M d, Y')}}
        </div>
    </div>
    @if($mention->text)
        <div class="mt-2 ml-2 text-gray-700">
            {{$mention->text}}
        </div>
    @endif
</div>
