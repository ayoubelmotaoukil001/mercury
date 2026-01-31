<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>group</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    max-width: 600px;
    margin: 20px auto;
    padding: 15px;
    background: #f9f9f9;
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

a {
    display: inline-block;
    margin-bottom: 15px;
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    background: #fff;
    padding: 10px 15px;
    margin-bottom: 8px;
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

li a, li button {
    margin-left: 5px;
    text-decoration: none;
    color: #007BFF;
    border: none;
    background: none;
    cursor: pointer;
}

li button {
    color: #dc3545;
}

li button:hover {
    text-decoration: underline;
}

button {
    padding: 5px 10px;
    border-radius: 5px;
    background-color: #dc3545;
    color: white;
    cursor: pointer;
}

button:hover {
    background-color: #b02a37;
}
</style>



<body>
    <h1>group list </h1>
    <a href="{{route('groups.create')}}">add new group</a>
    <ul>
    @foreach($groups as $group)
    <li>
        {{$group->name}}
        <a href="{{route('groups.edit',$group->id)}}"> edit </a>
        <form action="{{ route('groups.destroy',$group->id)}}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit"> delete</button>
        </form>
        <td>
    <a href="{{ route('groups.show', $group->id) }}" class="btn btn-info btn-sm">show</a>
</td>

    </li>
        @endforeach
    </ul>
    <a href="{{route('contacts.index')}}"> page des contact</a>
</body>
</html>