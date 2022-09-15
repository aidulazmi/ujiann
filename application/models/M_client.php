<?php 

class M_client extends CI_Model{

	function tampil_data_client(){
		return $this->db->get('client');
	}
	function tampil_data_jasa(){
		return $this->db->get('jasa');
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


		function is_logged_in()
    {
        return $this->session->userdata('id_client');
    }
        function logged_id2()
    {
        return $this->session->userdata('id_client');
    }

	function test_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }


    function tampil_data_monitoring(){
		return $this->db->get('monitoring');
	}


	function edit_data_jasa($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_jasa($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function input_data_v_order($data,$table){
		$this->db->insert($table,$data);
	}
}