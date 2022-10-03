<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="create" method="post">
        @csrf
        <input type="text" name="nom" placeholder="Enter your name">
        <input type="text" name="prenom" placeholder="Enter your firstname">
        <input type="text" name="age" placeholder="age">
        <input type="submit" value="Submit">
    </form>
    @foreach ($posts as $post)
    <p>
        {{ $post->nom }}
        {{ $post->prenom }}
        {{ $post->age }}
    </p>
    @endforeach


</body>
</html>
