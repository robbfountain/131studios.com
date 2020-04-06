<ul class="text-right">
    @foreach($categories as $category)
        <x-category-link :slug="$category->slug">
            {{$category->name}}
        </x-category-link>
    @endforeach
    <li class="py-2">
        <a class="text-xl text-gray-600" href="search">
            Search
        </a>
    </li>
</ul>
