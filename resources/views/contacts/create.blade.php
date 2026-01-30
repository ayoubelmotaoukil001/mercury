<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>new contact </h1>
    <form action="{{route('contacts.store')}}" method="post">
    @csrf
    <label >name of contact : </label>
    <input type="text" name="name">
    <button type="submit">save</button>

       <label>Email</label>
    <input type="email" name="email">

    <label>Phone</label>
    <input type="text" name="phone">

    
  
    </form>   
    <a href="{{ route('contacts.index')}}">back</a> 

   
</body>
</html>