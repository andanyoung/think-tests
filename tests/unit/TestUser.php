<?php


namespace tests\unit;


use tests\TestCase;
use think\Db;

class TestUser extends TestCase
{
    public function testBasicFunctions()
    {
        $this->assertTrue(true);
        $this->assertEquals(2, 1 + 1);
        $app = new \app\index\controller\Index();
        // 假设 index/index/index 方法返回的字符串中包含 "index"
        $this->assertStringContainsString('think', $app->index());
    }

    public function testThinkPHPStyleTests()
    {
        // 假设我访问 "/" 会看到 "index"
        $this->visit('/')->see('index');
    }


    function testDb()
    {
        $model = Db::table('user')->find();
        $this->seeInDatabase('user', ['id' => 1]);
    }
}