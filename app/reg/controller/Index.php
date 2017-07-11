<?php
/**
 * Created by PhpStorm.
 * User: haiyin
 * Date: 2017-07-12
 * Time: 0:59
 */

namespace app\reg\controller;


class Index
{
    public function index()
    {
        return view(null,[
            'title' => '注册',
            'keywords' => '注册',
            'description' => '注册'
        ]);
    }
}