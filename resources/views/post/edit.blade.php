<h1>Edit Post</h1>
<form method="post" action="{{route('posts.update',$post->post_id)}}">
{{csrf_field()}}
<input type="hidden" name="_method" value="PUT">
<input type="text" name="title" value="{{$post->title}}">
<textarea name="body">{{$post->body}}</textarea>
<input type="submit" name="submit" value="Save">
</form>