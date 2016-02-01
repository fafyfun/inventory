<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 1/31/2016
 * Time: 2:24 PM
 */
class Investor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model' , 'user');
    }

    public function index ()
    {
        $this->load->view('investor/index_view');


    }

}