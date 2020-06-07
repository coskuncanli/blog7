@extends('front.inc.master')
@section('content')
<div class="col-md-9">
    @foreach($article as $a)

        <div class="card mb-3">
            <img src="{{ $a->image }}" class="card-img-top" alt="{{ $a->title }}">
            <div class="card-body">
                <h5><a href="/makale/{{ $a->slug }}">{{ $a->title }}</a></h5>
                <p><a href="/kategori/{{ $a->getCategory->slug }}">{{ $a->getCategory->name }}</a>
                    <span style="float: right">{{ $a->created_at->diffforHumans() }}</span>
                </p>
                <p class="card-text">
                    {{ $a->content }}
                </p>
            </div>
        </div>

    @endforeach
</div>
<div class="col-md-3">@include('front.inc.sidebar')</div>
@endsection
