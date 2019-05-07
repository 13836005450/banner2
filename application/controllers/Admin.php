<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Banner_model');
    }
//    上传图片
    function getImgName($name)
    {
        $config['upload_path']      = '././assets/images/';//文件即将上传到的目录路径，注意这里经常出错
        $config['allowed_types']    = 'gif|jpg|png|jpeg';//允许上的文件 MIME 类型
        $config['max_size']     = 1024;//允许上传文件大小的最大值（单位 KB），设置为 0 表示无限制
        $config['max_width']        = 0;//图片的最大宽度（单位为像素），设置为 0 表示无限制
        $config['max_height']       = 0;//图片的最小高度（单位为像素），设置为 0 表示无限制

        $this->load->library('upload', $config);//初始化文件上传类，其中$this->load->library('类名');

        if ( ! $this->upload->do_upload($name))//如果不满足条件
        {
            $error = array('error' => $this->upload->display_errors());//获取错误信息
            echo '图片不能超过1M，且只支持jpg、png、jpeg三种格式';
            //$this->load->view('upload_form', $error);手册中给出的，未使用
        } else {
            $data = array('upload_data' => $this->upload->data());//把上传文件的相关数据赋给$data变量
//            var_dump(site_url());
//            die;
            // ../../assets
            $icon = $data['upload_data']['file_name'];
            return $icon;
        }
    }
//    加载admin页
    public function admin()
    {
        $allData = $this->Banner_model->getAllData();
        $traffic = $this->Banner_model->getTraffic();
        $this->load->view('admin',array(
            'data'=> $allData,
            'traffic'=>$traffic,
        ));
    }
//    修改URL和图片
    public function updateUri()
    {
        $menuUrl = $this->input->post('menu');
        $banner1 = $this->input->post('banner1');
        $banner2 = $this->input->post('banner2');
        $banner3 = $this->input->post('banner3');
        $banner4 = $this->input->post('banner4');
        $banner5 = $this->input->post('banner5');
        $banner6 = $this->input->post('banner6');
        $banner7 = $this->input->post('banner7');
        $banner8 = $this->input->post('banner8');
        $banner9 = $this->input->post('banner9');
        $banner10 = $this->input->post('banner10');
        $tel = $this->input->post('tel');

        $menuImg = $this->getImgName('menu-img');
        $banner1Img = $this->getImgName('banner1-img');
        $banner2Img = $this->getImgName('banner2-img');
        $banner3Img = $this->getImgName('banner3-img');
        $banner4Img = $this->getImgName('banner4-img');
        $banner5Img = $this->getImgName('banner5-img');
        $banner6Img = $this->getImgName('banner6-img');
        $banner7Img = $this->getImgName('banner7-img');
        $banner8Img = $this->getImgName('banner8-img');
        $banner9Img = $this->getImgName('banner9-img');
        $banner10Img = $this->getImgName('banner10-img');

        $this->Banner_model->updateUrlAndImg(1,$banner1,$banner1Img);
        $this->Banner_model->updateUrlAndImg(2,$banner2,$banner2Img);
        $this->Banner_model->updateUrlAndImg(3,$banner3,$banner3Img);
        $this->Banner_model->updateUrlAndImg(4,$banner4,$banner4Img);
        $this->Banner_model->updateUrlAndImg(5,$banner5,$banner5Img);
        $this->Banner_model->updateUrlAndImg(6,$banner6,$banner6Img);
        $this->Banner_model->updateUrlAndImg(7,$banner7,$banner7Img);
        $this->Banner_model->updateUrlAndImg(8,$banner8,$banner8Img);
        $this->Banner_model->updateUrlAndImg(9,$banner9,$banner9Img);
        $this->Banner_model->updateUrlAndImg(10,$banner10,$banner10Img);
        $this->Banner_model->updateUrlAndImg(11,$menuUrl,$menuImg);
        $this->Banner_model->updateUrlAndImg(12,$tel,'');

        $this->load->view('success');

    }
}