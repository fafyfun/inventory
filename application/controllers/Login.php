<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: fawaz
 * Date: 1/27/16
 * Time: 11:34 AM
 */
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model' , 'user');
    }

    public function index(){

        // create the data object
        $data = new stdClass();

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()==false){

            $this->load->view('login/index_view',$data);
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->user->resolve_user_login($username, $password)) {

                $user_id = $this->user->get_user_id_from_username($username);
                $user = $this->user->get_user($user_id);

                // set session user datas
                $_SESSION['user_id'] = (int)$user->id;
                $_SESSION['username'] = (string)$user->username;
                $_SESSION['email'] = (string)$user->email;
                $_SESSION['logged_in'] = (bool)true;

                // user login ok
                redirect("/admin/dashboard");

            } else {

                // login failed
                $data->error = 'Wrong username or password.';

                // send error to the view
                $this->load->view('login/index_view',$data);

            }


        }
    }

    public function forget_password()
    {
        // create the data object
        $data = new stdClass();

        // set validation rules
        $this->form_validation->set_rules('email', 'Email', 'required|email');

        if($this->form_validation->run()==false){
            $this->load->view('login/forgot_password',$data);
        }else{
            $email = $this->input->post('email');

            if($this->user->checkEmail($email)){

                echo 'email sent';

            }else{
                // login failed
                $data->error = 'Wrong email Id.';

                // send error to the view
                $this->load->view('login/index_view',$data);
            }
        }


    }

}