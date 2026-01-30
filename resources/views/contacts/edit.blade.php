<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> edit the contact</h1>
    <form action="{{ route ('contacts.update' , $contact->id)}}" method="post">
        @csrf 
        @method ('PUT')
        <label > name of contact</label>

        <input type="text" name="name" placeholder="write the new name of contact" value="{{$contact->name}}">

        <label > email</label>

        <input type="text" name="email" placeholder="write the new email of contact" value="{{$contact->email}}">


         <label > phone</label>

        <input type="text" name="phone" placeholder="write the new phone number of contact" value="{{$contact->phone}}">

        <button type="submit"> update </button>


        <a href="{{route('contacts.index')}}">back</a>

        

       </form>

</body>
</html>