<h1>Add Post</h1>

@if(session('success'))
<div>{{session('seccess')}}
</div>
@endif

@if($errors->any())
@foreach($errors->all() as $error)
<div>{{$error}}
@endforeach
@endif

<form method="post" action="{{route('posts.store')}}">
{{csrf_field()}}
<!--{!! Form::select('size',array('L'=>'larg','S'=>'small'),'S'); !!}-->
<input type="text" name="title">
<textarea name="body"></textarea>
<input type="submit" name="submit" value="Save">
</form>