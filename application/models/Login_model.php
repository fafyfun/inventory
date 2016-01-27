<?php

/**
 * Created by PhpStorm.
 * User: fawaz
 * Date: 1/27/16
 * Time: 3:47 PM
 */
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function resolve_user_login($username, $password) {

        $this->db->select('password');
        $this->db->from('user');
        $this->db->where('username', $username);

        $hash = $this->db->get()->row('password');

        return $this->verify_password_hash($password, $hash);

    }

    /**
     * verify_password_hash function.
     *
     * @access private
     * @param mixed $password
     * @param mixed $hash
     * @return bool
     */
    private function verify_password_hash($password, $hash) {

        return password_verify($password, $hash);

    }

    /**
     * get_user_id_from_username function.
     *
     * @access public
     * @param mixed $username
     * @return int the user id
     */
    public function get_user_id_from_username($username) {

        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('username', $username);

        return $this->db->get()->row('user_id');

    }

    /**
     * get_user function.
     *
     * @access public
     * @param mixed $user_id
     * @return object the user object
     */
    public function get_user($user_id) {

        $this->db->from('user');
        $this->db->where('user_id', $user_id);
        return $this->db->get()->row();

    }

    public function checkEmail($email)
    {
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('email', $email);

        return $this->db->get()->row('user_id');
    }

}