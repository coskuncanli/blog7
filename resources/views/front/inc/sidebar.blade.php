<ul class="list-group">
    <li class="list-group-item active">Kategoriler</li>
    @foreach($category as $c)
        <li class="list-group-item">
            <a href="/kategory/{{ $c->slug }}">{{ $c->name }}</a>
            <span class="badge badge-primary">{{$c->getCatCount}}</span>
        </li>
    @endforeach
</ul>
