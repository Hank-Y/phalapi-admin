<?php
/**
 * Created by PhpStorm.
 * User: 053659
 * Date: 2019/1/18
 * Time: 14:24
 */

namespace Admin\Api;

use PhalApi\Api;

/**
 * 接口测试
 * @package Admin\Api
 */
class Hello extends Api
{
    /**
     * Hello World
     * @desc 第一个phalapi接口测试
     * @return array
     */
    public function world()
    {
        return ['title'=>'Hello World!'];
    }
}