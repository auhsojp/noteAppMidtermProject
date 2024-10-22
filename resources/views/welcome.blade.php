<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello! Please write your name</h1>
    <form method="get" action="{{ route('notes.log')}}">
        <input type="text" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
