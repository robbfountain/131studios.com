<ul class="text-right">
    @foreach($categories as $category)
        <li class="py-1">
            <a class="text-xl text-gray-600  {{request()->get('c') == $category->slug ? 'font-bold text-gray-800' : 'font-semibold'}}" href="blog?c={{$category->slug}}">
                {{$category->name}}
            </a>
        </li>
    @endforeach
    <li class="py-2">
        <a class="text-xl text-gray-600" href="search">
            Search
        </a>
    </li>
</ul>
