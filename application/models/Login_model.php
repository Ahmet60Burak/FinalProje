<?php

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();

    }
    public $tableName="user";
    public function get($k_adi,$sifre){
        return $this->db->where('k_adi',$k_adi)->where('sifre',$sifre)->get($this->tableName)->row();
    }


}