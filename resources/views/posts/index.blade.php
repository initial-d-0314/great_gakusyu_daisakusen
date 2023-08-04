<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
    </head>
    <body>
        <h1>Blog Name</h1>
    <a href='/posts/create'>新規投稿作成</a>
        <div class='titlelist'>
            <p class='title_inlist'>Title</p>
        </div>
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                    <p class='body'>{{$post->body}}</p>
                    <form action="posts/{{$post->id}}" id="form_{{$post->id}}" method = "post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="DeletePost({{ $post->id }})">delete</button>
                    </form>
                </div>
            @endforeach
            <p>今のページ：{{$posts->currentPage()}}</p>
            <div class='paginate'>
                {{ $posts->links() }}
            </div>
        </div>
        
        <script>
        function DeletePost(id){
            if(confirm("投稿を削除します\nよろしいですか？")){
                document.getElementById(`form_${id}`).submit();
            <!--form_${id}という部分を探索してsubmitするコード-->
            }
        }
        </script>
    </body>
</html>