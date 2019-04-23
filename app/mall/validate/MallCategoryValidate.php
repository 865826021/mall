<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 小夏 < 449134904@qq.com>
// +----------------------------------------------------------------------
namespace app\mall\validate;

use think\Validate;

class MallCategoryValidate extends Validate
{
    protected $rule = [
        'name' => 'require|unique:mall_category',
    ];
    protected $message = [
        'name.require' => '分类名称不能为空!',
        'name.unique' => '分类名称已存在!',
    ];

    protected $scene = [
    ];
}