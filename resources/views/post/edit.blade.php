<h2>Edit post</h2>
<form action="{{route('post.update', [$post->id])}}" method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>Titel: <input type="text" name="title" value="{{$post->title}}"></div>
    <div>Content: <textarea type="text" name="content">{{$post->content}}</textarea> </div>
    <button>Send</button>
    <a href="{{route('post.destroy', [$post->id])}}" method="destroy">delite</a>
</form>
