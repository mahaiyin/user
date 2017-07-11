<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return view(null,[
            'title' => '用户中心',
            'keywords' => '用户中心',
            'description' => '用户中心'
        ]);
    }
}
