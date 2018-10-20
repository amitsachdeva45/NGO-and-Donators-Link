<html>
<body>

@foreach($projects as $project)
<div>
{{$project->name}}({{$project->money}})
</div>

@endforeach
<br>
<?php
foreach($projects as $project){?>
<div>
<?php echo $project->name;?>
</div>
<?php
}?>
</body>
</html>