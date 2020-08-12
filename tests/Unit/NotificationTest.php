<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Notification;

class NotificationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
        $this->assertSame(1, 1);
    }

    public function testAssertSame() {
        $notif = new Notification();
        $notif->name = "no";
        $this->assertSame("no", $notif->name);
    }

    public function testOne() {
        $var = 0;
        $this->assertEquals(0, $var);
        return $var;
    }

    /**
     * @depends testOne
     */
    public function testTwo($var) {
        $var++;
        $this->assertEquals(1, $var);
    }

    /**
     * @dataProvider additionProvider //additionProviderのデータを引数として読み込む
     * https://phpunit.readthedocs.io/ja/latest/writing-tests-for-phpunit.html#writing-tests-for-phpunit-test-dependencies
     */
    public function testString($expected, $a, $b) {
        $this->assertEquals($expected, $a.$b);
    }

    public function additionProvider() {
        return [
            "one" => ["sdfsdf", "sdf", "sdf"], // keyを書くとメッセージが変わる
            "two" => ["ffdd", "ff", "dd"]
        ];
    }
}
