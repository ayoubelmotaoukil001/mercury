<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1> edit thee group</h1>
        <form action="{{route('groups.update', $group->id )}}" method="post">
            @csrf
            @method('PUT')

            <label>  name of group </label>
            <input type="text" name="name" value="{{$group->name}}">

            <button type="submit"> update</button>
            <a href="{{route ('groups.index')}}">back</a>
        </form>
</body>
</html>