@extends('layout')
@section('content')
    @yield('header')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2 class="text-muted">{{$article->title}}</h2>
                    <span >{{$article->excerpt}}</span></div>
                <p><img src="/images/banner.jpg" alt="" class="image image-full"/></p>
               <p>{{$article->body}}</p>
            </div>

        </div>
    </div>

@endsection
