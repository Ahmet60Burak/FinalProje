<?php

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();
    }
    public $tableName="user";

    public function get_all(){
        return $this->db->get($this->tableName)->result();
    }
    public function newinsert($data=array()){
        return $this->db->insert($this->tableName,$data);
    }
    public function guncellegetir($id){
        $this->db->where('id',$id);
        return $this->db->get($this->tableName)->result();
    }
    public function update($id,$data=array()){
        $this->db->where('id',$id);
        $this->db->update($this->tableName,$data);
        if ($data){
            redirect(base_url("admin/listele/"));
        }


    }
}