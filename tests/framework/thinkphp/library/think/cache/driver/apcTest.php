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

class commonTest extends \PHPUnit_Framework_TestCase
{
  public function setUp()
  {
  }
  public function testA(){
    $this->assertEquals(1,2);
  }
}
