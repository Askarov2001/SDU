<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new book</title>
</head>
<body>
    
    <form action="{{route('add-book') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="author" placeholder="author">
    <input type="text" name="year" placeholder="year">
    <button type="submit">Create</button>
    </form>


</body>
</html>