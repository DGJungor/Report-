<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 14:45
 */

require_once 'App/PHPExcel.php';
require_once 'APP/PHPExcel\IOFactory.php';
require_once 'App/PHPExcel\Reader\Excel2007.php';//excel 2007

class UploadController
{
    public function __construct()
    {

    }

    function Index($param)
    {
        require('View/index.php');
//        require('Model/demo.php');
        $view = new Index();
//        $data = $model->getData($param);

        $data = 123;
        $view->display($data);

    }

    public function UploadExcel()
    {
        $file = $HTTP_POST_FILES['file']['name'];
        $filetempname = $_FILES['file']['tmp_name'];
    }

}