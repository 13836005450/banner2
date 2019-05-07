<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

//加载首页
    public function index()
    {
        $this->load->model('Banner_model');
        $this->Banner_model->updateTraffic();


        $allData = $this->Banner_model->getAllData();
        $traffic = $this->Banner_model->getTraffic();
        $this->load->view('index',array(
            'data'=> $allData,
            'traffic'=>$traffic,
        ));
    }



}
