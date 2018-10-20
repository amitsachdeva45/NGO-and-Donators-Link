<!DOCTYPE html>
<html>
<body>
<form method="post"  action="add">
<label>NAME</label><br>
<input type="text" name="username"><br>
<label>ID</label><br>
<input type="text" name="id"><br>


<input type="submit" ><br>
</form>
<br>

<a href="hhh">about</a>


@foreach($aaa as $project)
<div>
{{$name1->username}}
{{$project->name}}({{$project->money}})
<form method="post" action="uu">

<input id="hidden" value="<?php echo $project->id; ?>" style="display:none;" name="uid" >

<input type="number" placeholder="MONEY" min="0" max="2000" name="money">
<input type="submit">

</form>
</div>

@endforeach
{{{ isset($name) ? $name : '' }}}
<h6>{{$v or ''}}</h6>
</body>

</html>