<h1>View Posts</h1>
<h3><a href="{{route('posts.create')}}">Add post</a></h3>
@if($posts)

    <table>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Details</th>
    </tr>
    @foreach($posts as $pos)
    <tr>
    <td>{{$pos->post_id}}</td>
    <td>{{$pos->title}}</td>
    <td>{{$pos->body}}</td>
    <td>
    <a href="{{route('posts.edit',$pos->post_id)}}">Edit</a>
    <form method="post" action="{{route('posts.destroy',$pos->post_id)}}">
    <input type="hidden" name="_method" value="DELETE">
    {{csrf_field()}}
    <button type="submit">Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
    </table>

@endif