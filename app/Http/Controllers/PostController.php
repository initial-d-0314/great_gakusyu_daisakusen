<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest; 

use App\Models\Post;

class PostController extends Controller
{
    /*
    * Post一覧を表示する：
    * @param Post Postモデル
    * @return array Postモデルリスト
    */
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.index')->with(['posts'=> $post->getPaginatebyLimit(5)]);
        //変数'posts'としてposts.indexに渡す。'posts'にgetを使い、インスタンス化した$postを渡す。
    }

    /*
    * 特定IDのpostを表示する
    * @params Object Post // 引数の$postはid=1のPostインスタンス
    * @return Reposnse post view
    */
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
        //'post'はbladeファイルで使う変数。$postの中身ははid=1のPostインスタンス。
    }
    
    
    /*
    *ブログ投稿画面を表示する
    * @params null
    * @return posts.create
    */
    public function create()
    {
        return view('posts.create');
    }
    
    /*
    *ブログの投稿をDBに書き込む
    * @params Request,Post(空であるもの)
    * @return その投稿ページへのリダイレクト、DBへの登録(id連番で振る)
    */
    public function store(PostRequest $request,Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        //saveした時点でidとか日時とかが割り振られている
        return redirect('/posts/'.$post->id);
    }

}
