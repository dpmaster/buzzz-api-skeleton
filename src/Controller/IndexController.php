<?php

namespace App\Controller;

use Buzzz\Api\Controller;

class IndexController extends Controller {
    public function indexAction($request_data, $url_params) {
        return ['status' => "ok", 'test_di' => $this->test_di, 'request_data' => $request_data, 'url_params' => $url_params];
    }
}