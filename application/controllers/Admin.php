<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("admin_model");

    }

    public function index()
    {
        $this->load->view("dashboard");
    }

    public function listele()
    {
        $items=($this->admin_model->get_all());

        $viewData=array(
            "item"=>$items,
        );
        $this->load->view("layouts/listele",$viewData);
    }
    public function kayit()
    {
        $this->load->view("layouts/kayit");
    }
    public function guncelle($id){
        $items=$this->admin_model->guncellegetir($id);
        $gelenveri=array(
            "veri"=>$items
        );
        $this->load->view("layouts/guncelle",$gelenveri);

    }
    public function guncelle2($id){
        if ($this->input->method()=="post"){

                $insert2=$this->admin_model->update($id,
                    $data=array(
                        'Yetki_id'=>"2",
                        'Ad'=>$this->input->post("ad"),
                        'Soyad'=>$this->input->post("soyad"),
                        'Mail'=>$this->input->post("mail"),
                        'd_tarih'=>$this->input->post("d-tarih"),
                        'Sifre'=>md5($this->input->post("sifre")),
                        'Cinsiyet'=>($this->input->post("cinsiyet")==0?"Kadın":"Erkek"),
                        'Durum'=>"Aktif"

                    )
                );
                if ($insert2){
                    redirect(base_url("layouts/listele/"));
                }

        }
    }
    public function insert(){
        if ($this->input->method()=="post"){
            $this->form_validation->set_rules("ad","İsim","required|trim");
            $this->form_validation->set_rules("soyad","Soyisim","required|trim");
            $this->form_validation->set_rules("mail","E-Mail","required|trim");
            $this->form_validation->set_rules("sifre","Şifre","required|trim");
            $this->form_validation->set_rules("sifre2","Şifre Tekrarı","required|trim");
            $this->form_validation->set_rules("d-tarih","Doğum Tarihi","required|trim");
            $this->form_validation->set_rules("k_adi","Kullanıcı Adı","required|trim");


            if ($this->form_validation->run()==false){
                $this->load->view("layouts/kayit",validation_errors());
            }
            else{
                $insert=$this->admin_model->newinsert(
                    array(
                        'Yetki_id'=>"2",
                        'Ad'=>$this->input->post("ad"),
                        'Soyad'=>$this->input->post("soyad"),
                        'k_adi'=>$this->input->post("k_adi"),
                        'Mail'=>$this->input->post("mail"),
                        'd_tarih'=>$this->input->post("d-tarih"),
                        'Sifre'=>md5($this->input->post("sifre")),
                        'Cinsiyet'=>($this->input->post("cinsiyet")==0?"Kadın":"Erkek"),
                        'Durum'=>"Aktif"

                    )
                );
                if ($insert){
                    redirect(base_url("admin/listele/"));
                }
            }
        }
    }




}