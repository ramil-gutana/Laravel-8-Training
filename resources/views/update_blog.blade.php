<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update Blog</h1>
    <form action="{{url('/blog').'/'.$blog->id}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="title" placeholder="Title" value="{{$blog->title}}">
        </div>
        <div>
            <textarea name="content"  cols="30" rows="10" placeholder="Description">{{$blog->content}}</textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
