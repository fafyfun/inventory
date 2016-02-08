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
        $this->load->model('Investor_model' , 'investor');
    }

    public function index ()
    {
        // create the data object
        $data = new stdClass();

        // set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address_1', 'Address 1', 'required');
        $this->form_validation->set_rules('address_2', 'Address 2', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zip', 'Zip Code', 'required|max_length[12]');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('confirmEmail', 'Confrim Email', 'required|valid_email|matches[email]');
        $this->form_validation->set_rules('hPhone', 'Home Phone', 'required');
        $this->form_validation->set_rules('bPhone', 'Business Phone', 'required');
        $this->form_validation->set_rules('mPhone', 'Mobile Phone', 'required');

        if($this->form_validation->run()==false){

        }else{

            $data_input = array(
              'name'=> $this->input->post('name'),
              'address_1'=> $this->input->post('address_1'),
              'address_2'=> $this->input->post('address_2'),
              'city'=> $this->input->post('city'),
              'state'=> $this->input->post('state'),
              'zip'=> $this->input->post('zip'),
              'country'=> $this->input->post('country'),
              'email'=> $this->input->post('email'),
              'hPhone'=> $this->input->post('hPhone'),
              'bPhone'=> $this->input->post('bPhone'),
              'mPhone'=> $this->input->post('mPhone'),
            );

             if ($this->investor->insertInvestor($data_input)) {

    /*            $user_id = $this->user->get_user_id_from_username($username);
                $user = $this->user->get_user($user_id);

                // set session user datas
                $_SESSION['user_id'] = (int)$user->id;
                $_SESSION['username'] = (string)$user->username;
                $_SESSION['email'] = (string)$user->email;
                $_SESSION['logged_in'] = (bool)true;

                // user login ok
                redirect("/admin/dashboard");
    */

            } else {

                // login failed
                $data->error = 'Something went wrong';

                // send error to the view
                $this->load->view('login/index_view',$data);

            }


        }

        $this->load->view('investor/index_view',$data);


    }

    public function edit()
    {
        
    }

}