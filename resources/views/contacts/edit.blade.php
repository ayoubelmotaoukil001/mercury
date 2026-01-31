<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    max-width: 500px;
    margin: 20px auto;
    padding: 15px;
    background: #f9f9f9;
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

label {
    display: block;
    margin-top: 10px;
    margin-bottom: 5px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    background-color: #28a745;
    color: white;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

a {
    display: inline-block;
    margin-top: 15px;
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>

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