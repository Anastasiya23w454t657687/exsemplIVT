@extends('layouts.index')

@section('content')
<h2>Create post</h2>
<form action="/posts" method="post">
    @csrf
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        Titel: <input type="text" name="title">
        <x-input name="title" defaultValue="пиши пост" />
    </div>
    <div>Content: <textarea type="text" name="content"></textarea> </div>
    <button>Send</button>
</form>
@endsection
