<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>group</title>
</head>
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
    <a href="{{ route('groups.show', $group->id) }}" class="btn btn-info btn-sm">عرض</a>
</td>

    </li>
        @endforeach
    </ul>
    <a href="{{route('contacts.index')}}"> page des contact</a>
</body>
</html>