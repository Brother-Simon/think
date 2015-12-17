<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 * Apc缓存驱动测试
 * @author    mahuan <mahuan@d1web.top>
 */

namespace think\cache\driver;

use think\Exception;
use think\app;
use think\config;

class commonTest extends \PHPUnit_Framework_TestCase
{
  //设定基境
  public function setUp()
  {
    //验证模块是否加载
    if(!extension_loaded('apc')){
      $this->markTestSkipped('apc扩展不可用！');
    };
  }
  /**
   * 测试读取缓存
  */
  public function testGet(){
    App::run(Config::get());
    S(array('type'=>'apc','expire'=>3));
    S('key','value');
    $this->assertEquals('value',S('key'));
    //缓存过期测试
    sleep(3);
    $this->assertFalse('value' == S('key'));
    Config::reset(); 
  }
}
