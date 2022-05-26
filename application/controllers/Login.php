<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("login_model");
    }

    public function index(){
        $this->load->view("login/login");
    }
    public function logindata(){
        if ($this->input->method()=="post"){
            $this->form_validation->set_rules("k_adi","İsim","required|trim");
            $this->form_validation->set_rules("sifre","Şifre","required|trim");

            if ($this->form_validation->run()==false){
                $this->load->view("login/login",validation_errors());
            }
            else{
                $query=$this->login_model->get(
                    $k_adi=$this->input->post('k_adi'),
                    $sifre=md5($this->input->post('sifre'))
                );
                if ($query){
                    $this->session->set_userdata(array(
                        'oturum'=>true,
                        'ad'=>$query->Ad,
                        'soyad'=>$query->Soyad,
                        'id'=>$query->id,
                        'k_adi'=>$query->k_adi,
                        'sifre'=>$query->sifre,
                    ));
                    if ($query->Yetki_id==1){
                        redirect(base_url("admin"));


                    }
                    else{
                        echo "User";
                    }
                }
                else{
                    echo "Bilgiler Yanlış";
                }
            }
        }
    }

}