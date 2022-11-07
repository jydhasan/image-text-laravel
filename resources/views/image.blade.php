<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Upload image
    </h1>
    <form action="/image" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" id="title">
    <input type="file" name="image" id="image">
    <input type="submit" value="Submit">
    </form>
    @foreach ($student as $item)
        <h2>
            {{ $item->title }}
        </h2>
        <img src="{{ asset('uploads/students/'. $item->image) }}" alt="Zahid hasan" width="100px" height="100px">
    @endforeach
</body>
</html>