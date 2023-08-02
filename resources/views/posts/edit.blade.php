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
        <!--エラーがある場合初期値を差し替える-->
        @if($errors->any())
        <input type="text" name="post[title]" value="{{old('post.title')}}"/>
        @else
        <input type="text" name="post[title]" value="{{$post->title}}"/>
        @endif<br>
        <!--エラーがある場合リストで全部見せる-->
            @if($errors->has('post.title'))
                @foreach($errors->get('post.title') as $message)
                <li>{{$message}}</li>
                @endforeach
            @endif
        body:
        <textarea name="post[body]">@if($errors->any()){{old('post.body')}}@else{{$post->body}}@endif</textarea><br>
            <!--エラーがある場合リストで全部見せる-->
            @if($errors->has('post.body'))
                @foreach($errors->get('post.body') as $message)
                <li>{{$message}}</li>
                @endforeach
            @endif
        <input type="submit" value="編集確定"/>
        </form>
        <div class="footer">
            <a href="/posts/{{$post->id}}">戻る</a>
        </div>
    </body>
</html>