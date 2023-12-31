<?php

namespace App\Http\Services\NavShow;

class HistoryQuestionNav implements NavShowType {

    public function show() {
        return view('navShow/historyQuestion', [
            'name' => '我是历史问题列表'
        ]);
    }
}
