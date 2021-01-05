<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>

    <h1>Contact Page View</h1>

    <form action="{{route('contact')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name.."><br>
        <input type="email" name="email" placeholder="Email.."><br>
        <textarea name="message" placeholder="Message..."></textarea><br>
        <input type="submit" value="Send">
    </form>
    
</body>
</html>