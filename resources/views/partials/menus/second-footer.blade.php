<ul>
    @foreach($items as $menu_item)
        <a href="{{$menu_item->link()}}"><i class="fab {{$menu_item->title}}"></i></a>
    @endforeach
</ul>
