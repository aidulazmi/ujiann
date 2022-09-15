<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_admin');
		$this->load->model('M_login');
	}
	public function index()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/das/dashboard');
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	//data

	public function informasi_client()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_client()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/in_client',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	public function penawaran()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_penawaran()->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/penawaran',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

public function jasa()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_jasa()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/jasa',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

public function v_order()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_v_order()->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$data['user3'] = $this->M_admin->tampil_data_jasa()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/v_order',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

public function lwo()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_lwo()->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/lwo',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

public function monitoring()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_monitoring()->result();
		$data['user2'] = $this->M_admin->tampil_data_lwo()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/monitoring',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	public function mekanik()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_mekanik()->result();
		$data['user2'] = $this->M_admin->tampil_data_lwo()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/mekanik',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	public function user()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_user();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/user',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	


	//simpan

	function simpan_client(){

		if($this->M_login->logged_id2() == 'admin')
	{

		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$verifikasi_client = $this->input->post('verifikasi_client');
		$password = $this->input->post('password');

		$data = array(
			
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'email' => $email,
			'verifikasi_client' => $verifikasi_client,
			'password' => $password
			);
		$this->M_admin->input_data_client($data,'client');
		redirect('C_admin/informasi_client');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_penawaran(){

		if($this->M_login->logged_id2() == 'admin')
	{
		//$id_penawaran = $this->input->post('id_penawaran');
		$id_client = $this->input->post('id_client');
		$tanggal = $this->input->post('tanggal');
		$keterangan= $this->input->post('keterangan');
		$qty = $this->input->post('qty');
		$unit = $this->input->post('unit');
		$biaya = $this->input->post('biaya');
		$jumlah = $this->input->post('jumlah');

		$data = array(
			
			//'id_penawaran' => $id_penawaran,
			'id_client' => $id_client,
			'tanggal' => $tanggal,
			'keterangan' => $keterangan,
			'qty' => $qty,
			'unit' => $unit,
			'biaya' => $biaya,
			'jumlah' => $jumlah
			);
		$this->M_admin->input_data_penawaran($data,'penawaran');
		redirect('C_admin/penawaran');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_jasa(){

		if($this->M_login->logged_id2() == 'admin')
	{

		 $config['upload_path']          = './uploads/jasa';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form1', $error);
                }
                else
                {
                                    
                                  $file = $this->upload->data();
                                  $file1 = $file['file_name'];

                                   
                }

		//$id_jasa = $this->input->post('id_jasa');
		$layanan_jasa = $this->input->post('layanan_jasa');
		$harga = $this->input->post('harga');


		$data = array(
			
			//'id_jasa' => $id_jasa,
			'layanan_jasa' => $layanan_jasa,
			'harga' => $harga,
			'foto' => $file1,
			);
		$this->M_admin->input_data_jasa($data,'jasa');
		redirect('C_admin/jasa');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_v_order(){

		if($this->M_login->logged_id2() == 'admin')
	{
		//$id_order = $this->input->post('id_order');
		$id_client = $this->input->post('id_client');
		$tanggal = $this->input->post('tanggal');
		$email = $this->input->post('email');
		$id_jasa = $this->input->post('id_jasa');
		$status_verifikasi = $this->input->post('status_verifikasi');
		$status_pekerjaan = $this->input->post('status_pekerjaan');


		$data = array(
			
			//'id_order' => $id_order,
			'id_client' => $id_client,
			'tanggal' => $tanggal,
			'email' => $email,
			'id_jasa' => $id_jasa,
			'status_verifikasi' => $status_verifikasi,
			'status_pekerjaan' => $status_pekerjaan
			);
		$this->M_admin->input_data_jasa($data,'v_order');
		redirect('C_admin/v_order');
	}
	else
	{
		redirect("C_login");

	}

		
	}


	function simpan_lwo(){

		if($this->M_login->logged_id2() == 'admin')
	{
	
				 $config['upload_path']          = './uploads/lwo';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto1'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form1', $error);
                }
                else
                {
                                    
                                  $file = $this->upload->data();
                                  $file1 = $file['foto1'];

                                   
                }

                if ( ! $this->upload->do_upload('foto2'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form2', $error);
                }
                else
                {
                                    
                                  $file2 = $this->upload->data();
                                    $file2 = $file2['file_name'];
                }
                
				  $id_lwo = $this->input->post('id_lwo');
                  $id_client = $this->input->post('id_client');
                  $tanggal = $this->input->post('tanggal');
                  $equipment = $this->input->post('equipment');
                  $chasis = $this->input->post('chasis');
                  $engine_model = $this->input->post('engine_model');
                  $engine_no = $this->input->post('engine_no');
                  $repair_probelem = $this->input->post('repair_probelem');
                  $componen = $this->input->post('componen');
                  $kondisi = $this->input->post('kondisi');
                  $saran = $this->input->post('saran');
                  $note = $this->input->post('note');
                  $standardiameter = $this->input->post('standardiameter');
                  $standarpanjang = $this->input->post('standarpanjang');
                  $actualdiameter = $this->input->post('actualdiameter');

        	$data = array(
            
            'id_lwo' => $id_lwo,
            'id_client' => $id_client,
            'tanggal' => $tanggal,
            'equipment' => $equipment,
            'chasis' => $chasis,
            'engine_model' => $engine_model,
            'engine_no' => $engine_no,
            'repair_probelem' => $repair_probelem,
            'componen' => $componen,
            'kondisi' => $kondisi,
            'saran' => $saran,
            'note' => $note,
            'standardiameter' => $standardiameter,
            'standarpanjang' => $standarpanjang,
            'actualdiameter' => $actualdiameter,
            'gambarawallwo' => $file1,
             'gambarakhirlwo' => $file2
            
            );
        $this->M_admin->input_data_lwo($data,'lwo');
        redirect('C_admin/lwo');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_monitoring(){

		if($this->M_login->logged_id2() == 'admin')
	{
	
				$config['upload_path']          = './uploads/monitoring';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambarawal'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form1', $error);
                }
                else
                {
                                    
                                  $file = $this->upload->data();
                                  $file1 = $file['file_name'];

                                   
                }

                if ( ! $this->upload->do_upload('gambarakhir'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form2', $error);
                }
                else
                {
                                    
                                  $file2 = $this->upload->data();
                                    $file2 = $file2['file_name'];
                }

				  $id_monitoring = $this->input->post('id_monitoring');
                  $id_lwo = $this->input->post('id_lwo');
                  $tanggal = $this->input->post('tanggal');
                  $modelunit = $this->input->post('modelunit');
                  $serialnumber = $this->input->post('serialnumber');
                  $jobdes = $this->input->post('jobdes');
                  $lokasi = $this->input->post('lokasi');
                  $statusperkerjaan = $this->input->post('statusperkerjaan');
                  $statusverifikasi = $this->input->post('statusverifikasi');


        	$data = array(
            
            //'id_monitoring' => $id_monitoring,
            'id_lwo' => $id_lwo,
            'tanggal' => $tanggal,
            'modelunit' => $modelunit,
            'serialnumber' => $serialnumber,
            'jobdes' => $jobdes,
            'lokasi' => $lokasi,
            'statusperkerjaan' => $statusperkerjaan,
            'statusverifikasi' => $statusverifikasi,
            'gambarawal' => $file1,
             'gambarakhir' => $file2
            
            );
        $this->M_admin->input_data_monitoring($data,'monitoring');
        redirect('C_admin/monitoring');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_mekanik(){

		if($this->M_login->logged_id2() == 'admin')
	{
		//$id_mekanik = $this->input->post('id_mekanik');
		$id_lwo = $this->input->post('id_lwo');
		$nama = $this->input->post('nama');
		$divisi = $this->input->post('divisi');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$status = $this->input->post('status');


		$data = array(
			
			//'id_mekanik' => $id_mekanik,
			'id_lwo' => $id_lwo,
			'nama' => $nama,
			'divisi' => $divisi,
			'alamat' => $alamat,
			'email' => $email,
			'status' => $status,
			);
		$this->M_admin->input_data_mekanik($data,'mekanik');
		redirect('C_admin/mekanik');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_user(){

		if($this->M_login->logged_id2() == 'admin')
	{

		//$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = 'teknisi';
		$nama_lengkap = $this->input->post('nama_lengkap');


		$data = array(
			
			//'id_admin' => $id_admin,
			'username' => $username,
			'password' => $password,
			'status' => $status,
			'nama_lengkap' => $nama_lengkap
			);
		$this->M_admin->input_data_user($data,'user');
		redirect('C_admin/user');
	}
	else
	{
		redirect("C_login");

	}

		
	}


	//delete client

	function hapus_client($id_client){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_client' => $id_client);
	$this->M_admin->hapus_data_client($where,'client');
	redirect('C_admin/informasi_client');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function hapus_penawaran($id_penawaran){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_penawaran' => $id_penawaran);
	$this->M_admin->hapus_data_penawaran($where,'penawaran');
	redirect('C_admin/penawaran');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function hapus_jasa($id_jasa){

		if($this->M_login->logged_id2() == 'admin')
	{
	$_id_jasa = $this->db->get_where('jasa',['id_jasa' => $id_jasa])->row();
            $query = $this->db->delete('jasa',['id_jasa'=>$id_jasa]);

        if($query){
            unlink("uploads/jasa/".$_id_jasa->foto);
        }
            redirect('C_admin/jasa');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function hapus_v_order($id_order){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_order' => $id_order);
	$this->M_admin->hapus_data_v_order($where,'v_order');
	redirect('C_admin/v_order');
	}
	else
	{
		redirect("C_login");

	}
	
	}

public function hapus_lwo($id_lwo){
            $_id_lwo = $this->db->get_where('lwo',['id_lwo' => $id_lwo])->row();
            $query = $this->db->delete('lwo',['id_lwo'=>$id_lwo]);

        if($query){
            unlink("uploads/lwo/".$_id_lwo->gambarawallwo);
            unlink("uploads/lwo/".$_id_lwo->gambarakhirlwo);
        }
            redirect('C_admin/lwo');
}

public function hapus_monitoring($id_monitoring){
            $_id_monitoring = $this->db->get_where('monitoring',['id_monitoring' => $id_monitoring])->row();
            $query = $this->db->delete('monitoring',['id_monitoring'=>$id_monitoring]);

        if($query){
            unlink("uploads/monitoring/".$_id_monitoring->gambarawal);
            unlink("uploads/monitoring/".$_id_monitoring->gambarakhir);
        }
            redirect('C_admin/monitoring');
}

function hapus_mekanik($id_mekanik){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_mekanik' => $id_mekanik);
	$this->M_admin->hapus_data_mekanik($where,'mekanik');
	redirect('C_admin/mekanik');
	}
	else
	{
		redirect("C_login");

	}
	
	}

	function hapus_user($id_admin){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_admin' => $id_admin);
	$this->M_admin->hapus_data_user($where,'user');
	redirect('C_admin/user');
	}
	else
	{
		redirect("C_login");

	}
	
	}
	//edit

	function edit_client($id_client){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_client' => $id_client);
		$data['user'] = $this->M_admin->edit_data_client($where,'client')->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_in_client',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}


		function edit_jasa($id_jasa){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_jasa' => $id_jasa);
		$data['user'] = $this->M_admin->edit_data_jasa($where,'jasa')->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_jasa',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}

function edit_penawaran($id_penawaran){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_penawaran' => $id_penawaran);
		$data['user'] = $this->M_admin->edit_data_penawaran($where,'penawaran')->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_penawaran',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}


function edit_v_order($id_order){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_order' => $id_order);
		$data['user'] = $this->M_admin->edit_data_penawaran($where,'v_order')->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$data['user3'] = $this->M_admin->tampil_data_jasa()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_v_order',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	function edit_user($id_admin){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_admin' => $id_admin);
		$data['user'] = $this->M_admin->edit_data_user($where,'user')->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_user',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}
	//simpan edit

	function update_data_client(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_client = $this->input->post('id_client');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$verifikasi_client = $this->input->post('verifikasi_client');
		$password = $this->input->post('password');


		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'email' => $email,
			'verifikasi_client' => $verifikasi_client,
			'password' => $password
			);

	$where = array(
		'id_client' => $id_client
	);

	$this->M_admin->update_data_client($where,$data,'client');
		redirect('C_admin/informasi_client');
	}

	else
	{
		redirect("C_login");

	}
}


function edit_mekanik($id_mekanik){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_mekanik' => $id_mekanik);
		$data['user'] = $this->M_admin->edit_data_mekanik($where,'mekanik')->result();
		$data['user2'] = $this->M_admin->tampil_data_lwo()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_mekanik',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}
			
			//simpan edit

	function update_data_penawaran(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_penawaran = $this->input->post('id_penawaran');
		$id_client = $this->input->post('id_client');
		$tanggal = $this->input->post('tanggal');
		$keterangan= $this->input->post('keterangan');
		$qty = $this->input->post('qty');
		$unit = $this->input->post('unit');
		$biaya = $this->input->post('biaya');
		$jumlah = $this->input->post('jumlah');



		$data = array(
			//'id_penawaran' => $id_penawaran,
			'id_client' => $id_client,
			'tanggal' => $tanggal,
			'keterangan' => $keterangan,
			'qty' => $qty,
			'unit' => $unit,
			'biaya' => $biaya,
			'jumlah' => $jumlah
			);

	$where = array(
		'id_penawaran' => $id_penawaran
	);

	$this->M_admin->update_data_penawaran($where,$data,'penawaran');
		redirect('C_admin/penawaran');
	}

	else
	{
		redirect("C_login");

	}
}

	
// 	function update_data_jasa(){

// 			if($this->M_login->logged_id2() == 'admin')
// 	{
// 		$id_jasa = $this->input->post('id_jasa');
// 		$layanan_jasa = $this->input->post('layanan_jasa');
// 		$harga = $this->input->post('harga');



// 		$data = array(
// 			//'id_jasa' => $id_jasa,
// 			'layanan_jasa' => $layanan_jasa,
// 			'harga' => $harga
// 			);

// 	$where = array(
// 		'id_jasa' => $id_jasa
// 	);

// 	$this->M_admin->update_data_jasa($where,$data,'jasa');
// 		redirect('C_admin/jasa');
// 	}

// 	else
// 	{
// 		redirect("C_login");

// 	}
// }

public function update_data_jasa(){
        $foto = $this->input->post('foto');
        if($foto == ""){

             $this->profil_ubah2();
            
        }elseif($foto == "$foto"){

             $this->profil_ubah2();
            
        }
        else{
         
            $this->profil_ubah();
            $this->profil_ubah2();
        }
}

function profil_ubah(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_jasa = $this->input->post('id_jasa');
		$layanan_jasa = $this->input->post('layanan_jasa');
		$harga = $this->input->post('harga');

		  $_image = $this->db->get_where('jasa',['id_jasa' => $id_jasa])->row();
           
            $config['upload_path']          = './uploads/jasa/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
            $config['max_size']             = 2048;
            $config['max_width']            = 2000;
            $config['max_height']           = 2000;

        $this->load->library('upload', $config);
    
    if (!$this->upload->do_upload('foto')){
            redirect("C_admin/jasa");
    }
    else
    {

    $_data = array('upload_data' => $this->upload->data());

		$data = array(
			//'id_jasa' => $id_jasa,
			'layanan_jasa' => $layanan_jasa,
			'harga' => $harga,
			'foto' => $_data['upload_data']['file_name']
			
			);

	 $query = $this->db->update('jasa', $data, array('id_jasa' => $id_jasa));;
    
    if($query){
        unlink("uploads/jasa/".$_image->foto);
    }
    
    redirect('C_admin/jasa');
    }

    }}

function profil_ubah2(){

	if($this->M_login->logged_id2() == 'admin')
	{
 		$id_jasa = $this->input->post('id_jasa');
 		$layanan_jasa = $this->input->post('layanan_jasa');
		$harga = $this->input->post('harga');



 		$data = array(
 			//'id_jasa' => $id_jasa,
 			'layanan_jasa' => $layanan_jasa,
 			'harga' => $harga
 			);

 	$where = array(
 		'id_jasa' => $id_jasa
 	);

 	$this->M_admin->update_data_jasa($where,$data,'jasa');
 		redirect('C_admin/jasa');
 	}

 	else
 	{
 		redirect("C_login");

 	}
}


	function update_data_v_order(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_order = $this->input->post('id_order');
		$id_client = $this->input->post('id_client');
		$tanggal = $this->input->post('tanggal');
		$email = $this->input->post('email');
		$id_jasa = $this->input->post('id_jasa');
		$status_verifikasi = $this->input->post('status_verifikasi');
		$status_pekerjaan = $this->input->post('status_pekerjaan');



		$data = array(
			//'id_order' => $id_order,
			'id_client' => $id_client,
			'tanggal' => $tanggal,
			'email' => $email,
			'id_jasa' => $id_jasa,
			'status_verifikasi' => $status_verifikasi,
			'status_pekerjaan' => $status_pekerjaan
			);

	$where = array(
		'id_order' => $id_order
	);

	$this->M_admin->update_data_jasa($where,$data,'v_order');
		redirect('C_admin/v_order');
	}

	else
	{
		redirect("C_login");

	}
}



function update_data_mekanik(){

			if($this->M_login->logged_id2() == 'admin')
	{

	
		$id_mekanik = $this->input->post('id_mekanik');
		$id_lwo = $this->input->post('id_lwo');
		$nama = $this->input->post('nama');
		$divisi = $this->input->post('divisi');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$status = $this->input->post('status');



		$data = array(
			//'id_mekanik' => $id_mekanik,
			'id_lwo' => $id_lwo,
			'nama' => $nama,
			'divisi' => $divisi,
			'alamat' => $alamat,
			'email' => $email,
			'status' => $status
			);

	$where = array(
		'id_mekanik' => $id_mekanik
	);

	$this->M_admin->update_data_mekanik($where,$data,'mekanik');
		redirect('C_admin/mekanik');
	}

	else
	{
		redirect("C_login");

	}
}



function update_data_user(){

			if($this->M_login->logged_id2() == 'admin')
	{

	
		$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = 'teknisi';
		$nama_lengkap = $this->input->post('nama_lengkap');




		$data = array(
			//'id_admin' => $id_admin,
			'username' => $username,
			'password' => $password,
			'status' => $status,
			'nama_lengkap' => $nama_lengkap
			);

	$where = array(
		'id_admin' => $id_admin
	);

	$this->M_admin->update_data_user($where,$data,'user');
		redirect('C_admin/user');
	}

	else
	{
		redirect("C_login");

	}
}

	//cetak

	public function informasi_client_cetak()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_client()->result();
		$this->load->view('admin/cetak/V_C_client',$data);

	}
	else
	{
		redirect("C_login");

	}


	}
	public function penawaran_cetak()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_penawaran()->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$this->load->view('admin/cetak/V_C_penawaran',$data);
	}
	else
	{
		redirect("C_login");

	}


	}

public function jasa_cetak()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_jasa()->result();
$this->load->view('admin/cetak/V_C_jasa',$data);

	}
	else
	{
		redirect("C_login");

	}


	}

public function v_order_cetak()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_v_order()->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$data['user3'] = $this->M_admin->tampil_data_jasa()->result();
			$this->load->view('admin/cetak/V_C_order',$data);
	}
	else
	{
		redirect("C_login");

	}


	}
public function lwo_cetak()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_lwo()->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$this->load->view('admin/cetak/V_C_lwo',$data);
	}
	else
	{
		redirect("C_login");

	}


	}
	public function monitoring_cetak()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_monitoring()->result();
		$data['user2'] = $this->M_admin->tampil_data_lwo()->result();
$this->load->view('admin/cetak/V_C_monitoring',$data);
	}
	else
	{
		redirect("C_login");

	}


	}

	public function mekanik_cetak()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_mekanik()->result();
		$data['user2'] = $this->M_admin->tampil_data_lwo()->result();
$this->load->view('admin/cetak/V_C_mekanik',$data);
	}
	else
	{
		redirect("C_login");

	}


	}
	public function user_cetak()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_user();
		$this->load->view('admin/cetak/V_C_user',$data);
	}
	else
	{
		redirect("C_login");

	}


	}
}