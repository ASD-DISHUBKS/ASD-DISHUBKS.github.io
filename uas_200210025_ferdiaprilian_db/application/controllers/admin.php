<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 
	public function construct()
    {
        parent::construct();
        //control Admin menghubungkan model M_admin
    }

    public function index()
    {
        $this->load->model('M_admin');
        //harus ada
        $data = [
            'hasil' => $this->M_admin->tampilkandata()
        ];
        $this->load->view('tampilan', $data);
    }
    public function tambah()
    {
        $this->load->view('input');
    }
    public function simpan()
    {
        $this->load->model('M_admin');
        //$this->load->helper('url');

        $data = [
            "nip" => $this->input->post('nip'),
            "nama_karyawan" => $this->input->post('nama_karyawan'),
            "gender" => $this->input->post('gender'),
            "tempat_lahir" => $this->input->post('tempat_lahir'). "/" .$this->input->post('tanggal_lahir'),
            "alamat" => $this->input->post('alamat'),
            "kontak" => $this->input->post('kontak'),
            "jabatan" => $this->input->post('jabatan'),
        ];
        $this->M_admin->save($data);
        redirect ('Admin/index');
    }

    public function hapus($kd_admin)
    {
        $this->load->model('M_admin');
        $this->M_admin->modelhapus($kd_admin);
        redirect('Admin/index');
    }
    public function proses_edit()
    {
        $this->load->model('M_admin');
        $data= [
            "nip" => $this->input->post('nip'),
            "nama_karyawan" => $this->input->post('nama_karyawan'),
            "gender" => $this->input->post('gender'),
            "tempat_lahir" => $this->input->post('tempat_lahir'). "/" .$this->input->post('tanggal_lahir'),
            "alamat" => $this->input->post('alamat'),
            "kontak" => $this->input->post('kontak'),
            "jabatan" => $this->input->post('jabatan'),
        ];
        $this->M_admin->edit($data, $this->input->post('nip'));
        redirect('Admin/index');
    }

    public function edit($kode){
        $data["result"] = $this->db->get_where("karyawan",["nip"=>$kode])->row_array();
        $this->load->view('edit',$data);
    }

    public function laporan(){
        $this->load->model('M_admin');
        //harus ada
        $data = [
        'hasil'=>$this->M_admin->tampilkandata()
        ];
        $this->load->view('laporan',$data);
    }
}