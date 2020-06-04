@extends('layout')
@section('content')
    <form method="POST" action="/articles/{{$article->id}}">
        @csrf
        @method('PUT')
        <div class="row my-style">
            <div class="col-md-10 col-10">
                <h1 class="display-2 text-center text-light">Edit Article</h1>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$article->title}}">
                    @error('title')
                    <p class="text-muted">{{$errors->first('title')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" cols="30" rows="5" class="form-control" >{{$article->excerpt}}</textarea>
                    @error('excerpt')
                    <p class="text-muted">{{$errors->first('excerpt')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
                    @error('body')
                    <p class="text-muted">{{$errors->first('body')}}</p>
                    @enderror
                </div>
                <button class="btn btn-outline-success btn-block"type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection
