<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model
{
    public function updateUrlAndImg($id, $bannerUrl, $bannerImg)
    {
        $sql = "UPDATE t_banners
                SET url='$bannerUrl',img='$bannerImg'
                WHERE id=$id";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }
    public function getAllData()
    {
        $sql = "SELECT * FROM t_banners";
        return $this->db->query($sql)->result();
    }
    public function updateTraffic()
    {
        $sql = "update t_traffic set traffic=traffic+1";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }
    public function getTraffic()
    {
        $sql = "SELECT * FROM t_traffic";
        return $this->db->query($sql)->row();
    }

}