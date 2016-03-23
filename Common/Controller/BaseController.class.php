<?php
namespace Common\Controller;

use Think\Controller;
use Think\Upload;

class BaseController extends Controller
{
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
}