<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_client extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_client');
}

	public function index()
	{
		if($this->M_client->is_logged_in())
	{
		$this->load->view('client/su/home');
	}
	else
	{
		redirect("C_client/homesl");

	}
	}
	public function aboutsl()
	{
		$this->load->view('client/sl/about');
	}
	public function homesl()
	{
		$this->load->view('client/sl/home');
	}
	public function loginsl()
	{
		$this->load->view('client/sl/Login');
	}
	public function daftar()
	{
		$this->load->view('client/sl/register');
	}



    	public function suh()
	{
		if($this->M_client->is_logged_in())
	{
		$this->load->view('client/su/home');
	}
	else
	{
		redirect("C_client/homesl");

	}

		
	}


		public function not()
	{
		$this->load->view('client/sl/not');
	}
	public function abu()
	{
		if($this->M_client->is_logged_in())
	{
		
		
		$this->load->view('client/su/about');
	}
	else
	{
		redirect("C_client/homesl");

	}


	}
	public function asly()
	{

			if($this->M_client->is_logged_in())
	{
	$data['user'] = $this->M_client->tampil_data_jasa()->result();
		$this->load->view('client/su/as_layanan_jasa',$data);
	}
	else
	{
		redirect("C_client/homesl");

	}


		
	}
	
	function edit_jasa($id_jasa){
		
		$where = array('id_jasa' => $id_jasa);
		$data['user'] = $this->M_client->edit_data_jasa($where,'jasa')->result();
		$this->load->view('client/su/order',$data);


	}

	public function simpan_daftar()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$verifikasi_client = "1";
		$password = $this->input->post('password');

		$data = array(
			
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'email' => $email,
			'verifikasi_client' => $verifikasi_client,
			'password' => $password
			);
		$this->M_client->input_data_client($data,'client');
		redirect('C_client/loginsl');
	}
	
	    public function login1()
    {

            if($this->M_client->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
               redirect('C_client/logout');

            }else{

                //apabila session belum ada/terdaftarkan

                //form validation
                $this->form_validation->set_rules('email', 'username', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');

                //pesan form
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //
                $email = $this->input->post("email", TRUE);
                $password = $this->input->post('password', TRUE);

                //cek data via model
                $query = $this->M_client->test_login('client', array('email' => $email), array('password' => $password));

                //jika ditemukan, maka create session
                if ($query != FALSE) {
                    foreach ($query as $k) {

                        $data = array(
                            'id_client'   => $k->id_client,
                            'nama' => $k->nama,
                            'alamat' => $k->alamat,
                            'no_telp' => $k->no_telp,
                            'email' => $k->email,
                            'verifikasi_client' => $k->verifikasi_client,
                            'password'      => $k->password
                        );
                        //set session userdata
                        $this->session->set_userdata($data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("verifikasi_client") == "1"){
                            redirect('C_client/not');

                        }elseif($this->session->userdata("verifikasi_client") == "2"){
                            redirect('C_client/suh');
                        }else{
                           $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('client/sl/Login', $data);
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('client/sl/Login', $data);
                }

            }else{

                $this->load->view('client/sl/Login');
            }

        }

    }

	  public function logout()
    {
        $this->session->sess_destroy();
        redirect('C_client/homesl');
    }

    public function monitoring()
	{

		$data['user'] = $this->M_client->tampil_data_monitoring()->result();
		$this->load->view('client/su/layanan_jasa',$data);

	}


	function simpan_v_order(){
		
		//$id_order = $this->input->post('id_order');
		$id_client = $this->session->userdata('id_client');
		  $tanggal = date("Y-m-d");
		$email = $this->input->post('email');
		$id_jasa = $this->input->post('id_jasa');
		$status_verifikasi = "1";
		$status_pekerjaan = "1";


		$data = array(
			
			//'id_order' => $id_order,
			'id_client' => $id_client,
			'tanggal' => $tanggal,
			'email' => $email,
			'id_jasa' => $id_jasa,
			'status_verifikasi' => $status_verifikasi,
			'status_pekerjaan' => $status_pekerjaan
			);
		$this->M_client->input_data_v_order($data,'v_order');
		redirect('C_client/asly');
	}

}