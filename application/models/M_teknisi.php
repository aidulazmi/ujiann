<?php 

class M_teknisi extends CI_Model{

	function tampil_data_client(){
		return $this->db->get('client');
	}
	function input_data_client($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_client($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_client($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_client($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	function tampil_data_penawaran(){
		return $this->db->get('penawaran');
	}
	function input_data_penawaran($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_penawaran($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_penawaran($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_penawaran($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_data_cl(){
		$query = $this->db->query("SELECT penawaran.id_penawaran, client.id_client, client.nama from penawaran JOIN client on client.id_client = penawaran.id_client");
        return $query->result();
	}

	function tampil_data_jasa(){
		return $this->db->get('jasa');
	}
	function input_data_jasa($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_jasa($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_jasa($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_jasa($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	function tampil_data_v_order(){
		return $this->db->get('v_order');
	}
	function input_data_v_order($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_v_order($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_v_order($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_v_order($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_data_vo(){
		$query = $this->db->query("SELECT v_order.id_order, client.id_client, client.nama from v_order JOIN client on client.id_client = v_order.id_client");
        return $query->result();
	}
	function tampil_data_vo1(){
		$query = $this->db->query("SELECT * FROM v_order WHERE status_verifikasi = '2'");
        return $query->result();
	}


	function tampil_data_lwo(){
		return $this->db->get('lwo');
	}
	function input_data_lwo($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_lwo($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_lwo($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_lwo($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	function tampil_data_monitoring(){
		return $this->db->get('monitoring');
	}
	function input_data_monitoring($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_monitoring($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_monitoring($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_monitoring($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	function tampil_data_mekanik(){
		return $this->db->get('mekanik');
	}
	function input_data_mekanik($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_mekanik($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_mekanik($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_mekanik($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	

	function input_data_user($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_user($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_data_user(){
		$query = $this->db->query("SELECT * FROM user WHERE status='teknisi'");
        return $query->result();
	}

}

