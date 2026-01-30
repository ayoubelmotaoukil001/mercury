<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>contact list</h1>
    <form method="get">
    <select name="group_id">
        <option value="">all the groups</option>
        @foreach($groups as $group)
        <option value="{{$group->id}}"> {{$group->name}}</option>
        @endforeach
    </select>
        <button>filter</button>
    </form>
    <a href="{{route('contacts.create')}}">add new contact</a>
    <ul>
        @foreach ($contacts as $contact)
        <li>
        {{$contact->name}}
        <a href="{{route('contacts.edit' ,$contact->id)}}"> edit </a>
        <form action="{{route('contacts.destroy',$contact->id)}}" method="post" style="display: inline;">
            @csrf 
            @method ('DELETE')
            <button type="submit"> delete</button>
        </form>
        </li>
        @endforeach
    </ul>
    <a href="{{route('groups.index')}}"> page des group</a>
</body>
</html>