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
  public function setUp()
  {

  }
  public function testA(){
    C('s',43);
    App::run(Config::get());
    S('name',$value);
    dump(C('s'));
  	// TPRun();
  	// TPRun();
  	// S('a','11');
  	// $this->assertEquals(10,S('a'));
  	// TPDestory();
    Config::reset(); 
    dump(C('s'));
  }
  public function testB(){
    A('index');
  }
}
