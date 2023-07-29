<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
