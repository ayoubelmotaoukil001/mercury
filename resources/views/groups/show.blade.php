<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>{{ $group->name }}</h1>


    <form method="get" action="{{ route ('groups.show'  , $group->id )}}">
    <input type="text" name="search" placeholder="search by name">
    <button type="submit"> search </button>
</form>

   
<a href="{{ route ('groups.addContacts' , $group->id) }}"> add membre</a>
</a>

    @if($contacts->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary btn-sm">edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" >delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p> this grop is emppty for now</p>
    @endif
</div>
<a href="{{ route ('groups.index')}}"> back</a>

</body>
</html>