<?php
namespace Admin\Model;

use Common\Model\BaseModel;

class AdminModel extends BaseModel
{
    //自动验证
    protected $_validate=array(
        array('admin_name','require','用户名必须'),
        array('admin_name','','用户名已存在',0,'unique',1),
        array('password','require','密码必须')
    );
    
    //自动完成
    protected $_auto=array(
        array('add_time','time',1,'function')
    );

}