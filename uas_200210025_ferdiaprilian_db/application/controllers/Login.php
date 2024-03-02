<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {
        $this->load->view('login');
    }
    public function proses_login(){
        $this->load->Library('session');
        $data = [
            "username" => $this->input->post("username"),
            "password" => $this->input->post("password"),
        ];

        $login = $this->db->get_where("login",$data)->num_rows();
        if($login == 1){
            
            redirect("Admin");

        }else{
            $this->session->set_flashdata('pesan','username atau password salah');
            redirect("Login");
        }
    }
}