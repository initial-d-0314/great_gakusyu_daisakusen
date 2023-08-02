<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name=”viewport” content=”width=device-width,initial-scale=1″>
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Edit Page</h1>
        <hr>
        <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('PUT')
        title:
        <input type="text" name="post[title]" value="{{$post->title}}"/><br>
        body:
        <textarea name="post[body]">{{$post->body}}</textarea><br>
        <input type="submit" value="編集確定"/>
        </form>
        <div class="footer">
            <a href="/{{$post->id}}">戻る</a>
        </div>
    </body>
</html>