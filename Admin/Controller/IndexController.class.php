<?php
namespace Admin\Controller;
use Common\Controller\BackendController;
class IndexController extends BackendController {
    public function index(){
        if (IS_POST)
        {
            $filename=$_FILES['file'];
            self::upload($filename);
        }
        $this->display();
    }
}