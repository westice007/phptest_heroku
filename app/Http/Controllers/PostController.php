<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\TestComment;



class PostController extends Controller
{
    //
    public function getIndex()
    {
        return view('welcome');
    }


    public function getAbout()
    {
        echo '关于';
    }

    public function postAbout2(Request $request)
    {

    	$arg0 = $request->get('arg0',101);

        echo '关于post2:'.$arg0;
    }

    public function postUpdate(Request $request)
    {
        $commentId = $request->get('id',0);
        $title = $request->get('title','未定义');
        $content = $request->get('content','无内容');

        $comment = TestComment::findOrFail($commentId);;

        $comment->title = $title;
        $comment->content = $content;

        $ret = $comment->update();

        //var_dump($ret);
        return $comment->toArray();
    }

    public function postCreate(Request $request)
    {

        $title = $request->get('title','未定义');
        $content = $request->get('content','无内容');

        $comment = new TestComment;

        $comment->title = $title;
        $comment->content = $content;

        $ret = $comment->save();

        //var_dump($comment);
        return $comment->toArray();
    }

    public function anyCommentlist(Request $request)
    {
        $limit = $request->get('limit',10);
        $page = $request->get('page',1);

        $someComments = TestComment::where('id', '>', 8)->paginate($limit,['*'],'pagename',$page);

        $methods = get_class_methods($someComments);
        //var_dump($methods);

        $data = $someComments->items();
        $totalCount = $someComments->total();


        return $someComments->toArray();
    }

    public function anyAbout3()
    {
        echo '关于post3 xxxx';
    }
}
