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
        $this->load->view("former/index.php");
    }

}