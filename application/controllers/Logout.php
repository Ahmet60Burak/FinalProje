<?php

class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        session_destroy();
        redirect(base_url());
    }

}