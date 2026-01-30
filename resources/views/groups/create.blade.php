<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> new group</h1>
    <form action="{{ route ('groups.store') }} " method="post">
        @csrf
        <label>name of group :</label>
        <input type="text" name="name">
        <button type="submit">save</button>

</form>
        <a href="{{ route('groups.index')}}"> back</a>
</body>
</html>