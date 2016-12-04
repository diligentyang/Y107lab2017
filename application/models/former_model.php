<?php
class Former_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    function getGallery(){
        $sql = "SELECT * FROM image WHERE cid = ? limit 0,12";
        $query = $this->db->query($sql, array(1));
        return $query->result_array();
    }

    function getProducts(){
        $sql = "SELECT * FROM image WHERE cid = ?";
        $query = $this->db->query($sql, array(2));
        return $query->result_array();
    }

}
