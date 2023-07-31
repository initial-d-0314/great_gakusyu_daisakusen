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
		<h1>Blog Post Page</h1>
		<hr>
        <form action="/posts" method="post">
            @csrf
            title:
            <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"/><br>
            <!--エラーがある場合リストで全部見せる-->
            @if($errors->has('post.title'))
                @foreach($errors->get('post.title') as $message)
                <li>{{$message}}</li>
                @endforeach
            @endif
            
            body:
            <textarea name="post[body]" placeholder="投稿内容を書いてね">{{old('post.body')}}</textarea><br>
            <!--エラーがある場合リストで全部見せる-->
            @if($errors->has('post.body'))
                @foreach($errors->get('post.body') as $message)
                <li>{{$message}}</li>
                @endforeach
            @endif
            
        <input type="submit" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>