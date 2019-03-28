@php 
    $user_input = "<h1>content</h1>";
@endphp

{{$user_input}}
{!!$user_input!!}


@for($i=0;$i<=5;$i++)
    {{$i}}
@endfor