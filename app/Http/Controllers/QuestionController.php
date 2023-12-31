<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller {
    //
    public function list(Request $request)
    {
        $page = $request->get('page');
        $list = Question::query()->orderBy('id','desc')->paginate(2,['*'],'page',$page)->toArray();
        return view('question/show', [
            'questionData' => $list
        ]);
    }

    public function show($page = 1){
        $list = Question::query()->orderBy('id','desc')->paginate(20,['*'],'page',$page)->toArray();
        return view('question/show', [
            'questionData' => $list
        ]);
    }

    public function commit(){
        return view('question/commit');
    }


    private function mockList()
    {
        return [
            [
                'title'   => '测试标题1',
                'content' => '我是测试标题1的内容'
            ],
            [
                'title'   => '测试标题2',
                'content' => '我是测试标题2的内容'
            ],
            [
                'title'   => '测试标题3',
                'content' => '我是测试标题3的内容'
            ],
            [
                'title'   => '测试标题4',
                'content' => '我是测试标题4的内容'
            ],
            [
                'title'   => '测试标题4',
                'content' => '我是测试标题4的内容'
            ],
            [
                'title'   => '测试标题4',
                'content' => '我是测试标题4的内容'
            ],
        ];
    }
}
