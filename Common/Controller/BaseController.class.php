<?php
namespace Common\Controller;

use Think\Controller;
use Think\Upload;
use Extend\Page;

class BaseController extends Controller
{
    const DEFAULT_PAGESIZE=10;           //每页显示条数
    
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * 上传图片
     * @param unknown $filename
     */
    public static function upload($filename)
    {
        $config=array(
            'maxSize'=>3000000,
            'rootPath'=>C('UPLOAD_ROOT_DIR'),
            'saveName'=>array('uniqid',''),
            'exts'=>array('jpg','png','gif','jpeg'),
            'autoSub'=>true,
            'subName'=>array('date','Ymd')
        );
        
        $upload=new Upload($config);
        
        $info=$upload->upload();
        var_dump($info);exit;
    }
    
    /**
     * 获取分页数据
     * @param unknown $table    表名
     * @param unknown $condition    条件
     * @param string $order     排序字段
     */
    public static function showPage($table,$condition=array(),$order=null)
    {
        if (!is_string($table))
        {
            return false;
        }
        //把首字母大写
        $table=ucwords($table);
        //实例化模型
        $model=M($table);
        $count=$model->where($condition)->count();
        //实例化分页
        $page=new Page($count,self::DEFAULT_PAGESIZE);
        $data['list']=$model->where($condition)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select();
        $data['show']=$page->show();
        return $data;
    }
}