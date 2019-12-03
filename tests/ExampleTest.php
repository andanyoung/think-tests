<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
namespace tests;

use app\stat\service\CycleService;


require_once __DIR__ . '/../vendor/autoload.php';

class ExampleTest extends TestCase
{

    public function testBasicExample()
    {
        $this->visit('/')->see('ThinkPHP');
    }

    public function testBasicExample1()
    {
        ($datetime = '2019-11-07 10:13:57');
        $divideLineService = new CycleService($datetime);
        $divideLineService->mid();
        return success();
    }
}