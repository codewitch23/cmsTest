@extends('layout')
@section('content')
    @yield('header')
    <div id="wrapper">
        <div id="page" class="container">
            <p id="content">
            <div class="title">
                <h2 class="text-muted">{{$article->title}}</h2>
                <span>{{$article->excerpt}}</span></div>
            <p><img src="/images/banner.jpg" alt="" class="image image-full"/></p>
            <p>{{$article->body}}</p>

            <p class="mt-5 border border-top "></p>
            <div class="tags">
                @foreach($article->tags as $tag)
                    <h3><span class="badge badge-pill badge-secondary  ">
                <a class="text-light" href="{{route('articles.index',['tag'=>$tag->name])}}">{{$tag->name}}</a>
                </span></h3>
                @endforeach
            </div>

        </div>

    </div>
    </div>

@endsection
