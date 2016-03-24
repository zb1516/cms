<?php
namespace Admin\Controller;

use Common\Controller\BaseController;

class AdminController extends BaseController
{
    /**
     * 管理员列表
     * @param string $keyword
     */
    public function index($keyword='')
    {
        //创建查询条件
        $condition=array();
        if (!empty($keyword))
        {
            $condition=array('admin_name'=>'%'.$keyword.'%');
        }
        //返回带分页数据
        $result=self::showPage('admin',$condition);
        $this->assign('list',$result['list']);
        $this->assign('page',$result['show']);
        $this->display();
    }
    
    /**
     * 添加用户
     */
    public function add()
    {
        if (IS_POST)
        {
            //实例化模型
            $admin_model=D('Admin');
            //创建数据
            $data=$admin_model->create();
            //验证数据是否通过验证
            if (!$data)
            {
                $this->error($admin_model->getError());
            }
            //生成随机字符串
            $data['salt']=rand(1000,9999);
            //密码加密
            $data['password']=self::checkPwd($data['password'], $data['salt']);
            //添加数据
            $result=$admin_model->add($data);
            if($result !== false)
            {
                redirect(U('Admin/login'));
            }else
            {
                $this->error('保存失败');
            }
        }
        $this->display();
    }
    
    
    /**
     * 用户登陆
     */
    public function login()
    {
        //判断是否是post提交
        if (IS_POST)
        {
            $admin_model=D('Admin');
            //创建数据
            $data=$admin_model->create($_POST,4);
            //判断是否通过验证
            if(!$data)
            {
                $this->error($admin_model->getError());exit;
            }
    
            //如果通过验证，进行校验
            $result=self::checkExists($data);
            if ($result)
            {
                redirect(U('Index/index'));
            }else
            {
                $this->error('用户名或密码错误');
            }
    
        }
        $this->display();
    }
    
    /**
     * 判断用户是否存在
     */
    private static function checkExists($data)
    {
        //如果不是数组或者数组为空直接返回false
        if (!is_array($data) || empty($data))
        {
            return false;
        }
        $condition=array('admin_name'=>$data['admin_name']);
        //根据用户名查询数据
        $admin_info=M('Admin')->where($condition)->find();
        //如果记录不存在则返回false
        if(!$admin_info)
        {
            return false;
        }
        //如果存在则进行密码校验
        $password=self::checkPwd($data['password'],$admin_info['salt']);
    
        //判断密码是否正确
        if($admin_info['password'] !== $password)
        {
            return false;
        }
        
        //将用户信息存入session
        session('admin_id',$admin_info);
        
        return true;
    }
    
    /**
     * 密码加密
     */
    private static function checkPwd($password,$salt)
    {
        return md5(md5($password).$salt);
    }
    
    
    /**
     * 退出登陆
     */
    public function logout()
    {
        session(null);
        session_destroy();
        redirect(U('Admin/login'));
    }
}