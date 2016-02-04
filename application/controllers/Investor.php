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
        // create the data object
        $data = new stdClass();

        // set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required|alpha');
        $this->form_validation->set_rules('address_1', 'Address 1', 'required|alpha_numeric');
        $this->form_validation->set_rules('address_2', 'Address 2', 'required|alpha_numeric');
        $this->form_validation->set_rules('city', 'City', 'required|alpha_numeric');
        $this->form_validation->set_rules('state', 'State', 'required|alpha_numeric');
        $this->form_validation->set_rules('zip', 'Zip Code', 'required|alpha_numeric|max_length[12]');
        $this->form_validation->set_rules('country', 'Country', 'required|alpha_numeric');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('confirmEmail', 'Password', 'required');
        $this->form_validation->set_rules('hPhone', 'Password', 'required');
        $this->form_validation->set_rules('bPhone', 'Password', 'required');
        $this->form_validation->set_rules('mPhone', 'Password', 'required');

        $this->load->view('investor/index_view');


    }

}