@extends('layouts.index')

@section('page.title', 'posts')


@section('content')

    <x-index></x-index>

    <a href="/create">create</a>
    @foreach($posts as $post)

        <h2>{{$post->title}}</h2>
        <h3>{{$post->content}}</h3>
        <a href="{{route('post.edit', ['id'=>$post->id])}}">edit</a>
    @endforeach
@endsection
