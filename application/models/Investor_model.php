<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 2/5/2016
 * Time: 11:16 PM
 */
class Investor_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertInvestor($data)
    {
        return $this->db->insert('investor_profile',$data);
    }

}