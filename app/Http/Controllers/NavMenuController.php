<?php

namespace App\Http\Controllers;

use App\Http\Services\NavShow\HistoryQuestionNav;
use App\Http\Services\NavShow\NavShowProcessor;
use ReflectionClass;

class NavMenuController extends Controller {
    public function historyQuestion() {

    }

    public function dispatch(string $router) {
        $prefixNamespace  = 'App\Http\Services\NavShow';
        $router           = $prefixNamespace . '\\' . $router;
        $navShowProcessor = new NavShowProcessor(new $router());
        $navShowProcessor->processShow();
    }
}
