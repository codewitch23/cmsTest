@extends('layout')
@section('content')
    @yield('header')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    @foreach($articles as $article)
                        <h2><a href="{{$article->path()}}()">
                                {{$article->title}}</a></h2>
                        <h3>{{$article->excerpt}}</h3>
                        <p><img src="/images/banner.jpg" alt="" class="image image-full"/></p>
                        <p>{{$article->body}}</p>
                    @endforeach
                </div>

            </div>
        </div>

@endsection
