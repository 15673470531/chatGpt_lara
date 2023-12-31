<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        var_dump(4444);exit;
        return view('test.index',[
            'data' => 2333
        ]);
        $testMd = new Test();
        $testMd->name = '测试插入';
        $testMd->mobile = '15677777777';

        $res = $testMd->save();
        var_dump($res);exit;

        $testData = Test::all();
        var_dump($testData);exit;

        $data = DB::select('select * from q_test');
        var_dump( DB::select('select * from q_test'));exit;
        return view('test.index',[
            'data' => 2333
        ]);
        var_dump(11);exit;

        var_dump($data);exit;
    }
}
