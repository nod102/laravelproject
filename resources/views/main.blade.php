<?php /* {{ Form::open(array()) }}*/?>
{{ Form::open(array('route' => 'makepost', 'method' => 'post')) }}
age : <input type="text" name="age">
<input type="submit" name="submit" value="add">
{{ Form::close() }}
