<?php
class Former extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();
        $this->load->library('session');
    }

    function index(){
        echo "1111111";
    }

}