<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    @foreach ($tasks as $index=>$task)
    {{-- <li>{{++$index}}</li> --}}
    <li><a href="contact_us/{{$task->id}}">{{$task->name}}</a></li>
    @endforeach
</ul>
</body>
</html>
