<h2>إضافة كونتاكت إلى مجموعة: {{ $group->name }}</h2>

@foreach($contacts as $contact)
    <form method="POST" action="{{ route('groups.attachContact', [$group->id, $contact->id]) }}">
        @csrf
        {{ $contact->name }} ({{ $contact->email }})
        <button type="submit">إضافة</button>
    </form>
@endforeach
