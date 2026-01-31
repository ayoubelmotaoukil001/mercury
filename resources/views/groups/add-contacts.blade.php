<style>
body {
    font-family: Arial, sans-serif;
    max-width: 500px;
    margin: 20px auto;
    padding: 15px;
    background: #f9f9f9;
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

form {
    background: #fff;
    padding: 10px 15px;
    margin-bottom: 10px;
    border-radius: 8px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

button {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    background-color: #007BFF;
    color: white;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>

<h2>Add contact to the group {{ $group->name }}</h2>

@foreach($contacts as $contact)
    <form method="POST" action="{{ route('groups.attachContact', [$group->id, $contact->id]) }}">
        @csrf
        {{ $contact->name }} ({{ $contact->email }})
        <button type="submit">add</button>
    </form>
@endforeach
