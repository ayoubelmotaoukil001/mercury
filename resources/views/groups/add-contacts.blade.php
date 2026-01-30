<h2>Add contact to the group {{ $group->name }}</h2>

@foreach($contacts as $contact)
    <form method="POST" action="{{ route('groups.attachContact', [$group->id, $contact->id]) }}">
        @csrf
        {{ $contact->name }} ({{ $contact->email }})
        <button type="submit">add</button>
    </form>
@endforeach
