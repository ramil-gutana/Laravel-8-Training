<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CREATE BLOG</h1>
    <form action="{{url('/blog')}}" method="POST">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Title">
        </div>
        <div>
            <textarea name="content"  cols="30" rows="10" placeholder="Description"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
