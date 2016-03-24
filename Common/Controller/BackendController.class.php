<?php
namespace Common\Controller;

use Common\Controller\BaseController;

class BackendController extends BaseController
{
    //初始化的时候验证用户是否登陆
    public function _initialize()
    {
        $admin_id=session('admin_id');
        //判断是否已经登陆了
        if ($admin_id == null)
        {
            redirect(U('Admin/login'));
        }
    }
}