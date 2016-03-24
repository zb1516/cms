<?php
namespace Admin\Controller;

use Common\Controller\BackendController;

class UserController extends BackendController
{
    /**
     * 用户列表
     * @param string $keyword
     */
    public function index($keyword="")
    {
        $condition=array();
        if (!empty($keyword))
        {
            $condition=array('user_name'=>'%'.$keyword.'%');
        }
        //查询带分页数据
        $result=self::showPage('user',$condition);
        $this->assign('page',$result['show']);
        $this->assign('list',$result['list']);
        $this->display();
    }
}