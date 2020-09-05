<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\News;

class NewsController extends Controller{
    public function index(Request $request){
        $posts = News::all()->sortByDesc('updated_at');
        //投稿日時順に新しい方から並べる
        
        if(count($posts) > 0) {
            $headline = $posts->shift();
            //shift()メソッドは、配列の最初のデータを削除し、その値を返すメソッドです。
        }else{
            $headline = null;
        }
        
        return view('news.index',['headline' => $headline, 'posts' => $posts]);
        
    }
}