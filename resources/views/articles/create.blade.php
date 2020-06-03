@extends('layout')
@section('content')
<form method="POST" action="/articles">
    @csrf
    <div class="row my-style">
        <div class="col-md-10 col-10">
            <h1 class="display-2 text-center text-light">Create Article</h1>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea name="excerpt" id="excerpt" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button class="btn btn-outline-success btn-block"type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection
