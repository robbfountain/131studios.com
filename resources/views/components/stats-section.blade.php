<div {{$attributes->merge(['class' => "pb-12 sm:pb-16"])}}>
    <div class="relative max-w-2xl mx-auto 8">
        <div class="mx-auto">

            @if(isset($title))
                <h2 {{$title->attributes->merge(['class' => 'text-2xl'])}}>
                    {{$title}}
                </h2>
            @endif

            {{$slot}}
        </div>
    </div>
</div>
