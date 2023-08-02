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
        <h1 class="title">{{$post->title}}</h1>
		<div class="content">
            <div class='content_post'>
                <h3>本文</h3>
                <p class='content_body'>{{$post->body}}</p>
            </div>
        </div>
        <p>投稿日時：{{$post->created_at}}、更新日時：{{$post->updated_at}}</p>
        <div class="edit">
            <a href="/posts/{{$post->id}}/edit">編集</a>
        </div>
        <div class="footer">
            <a href="/">back</a>
        </div>
    </body>
</html>