<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body {
    font-family: Arial, sans-serif;
    max-width: 700px;
    margin: 20px auto;
    padding: 15px;
    background: #f9f9f9;
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

form, .top-buttons {
    margin-bottom: 15px;
}

select, button, a {
    padding: 8px 12px;
    margin-right: 5px;
    border-radius: 5px;
    text-decoration: none;
    border: none;
    cursor: pointer;
}

button.filter-btn {
    background-color: #007BFF;
    color: white;
}

button.filter-btn:hover {
    background-color: #0056b3;
}

a.add-contact-btn {
    background-color: #28a745;
    color: white;
}

a.add-contact-btn:hover {
    background-color: #218838;
}

a.back-group-btn {
    background-color: #6c757d;
    color: white;
}

a.back-group-btn:hover {
    background-color: #5a6268;
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

li .actions {
    display: flex;
    gap: 5px;
}

li .actions a, li .actions button {
    text-decoration: none;
    padding: 5px 8px;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    font-size: 0.9em;
}

li .actions a.edit-btn {
    background-color: #007BFF;
}

li .actions a.edit-btn:hover {
    background-color: #0056b3;
}

li .actions form button.delete-btn {
    background-color: #dc3545;
}

li .actions form button.delete-btn:hover {
    background-color: #b02a37;
}
</style>




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