@if(!empty($menu['child']))
    <ul class="mgana-dropdown dropdown-hover">
        @foreach($menu['child'] as $child)
            <li><a href="{{ $child['link'] }}">{{ $child['label'] }}</a></li>
        @endforeach
    </ul>
@endif
