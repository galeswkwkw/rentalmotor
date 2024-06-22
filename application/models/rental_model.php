<?php

class Rental_model extends CI_Model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	public function insert_data($data, $table)
	{
		$this->db->insert($data, $table);
	}
	public function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}
	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function ambil_id_motor($id)
	{
		$hasil = $this->db->where('id_motor', $id)->get('motor');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function get_transaction_by_id($transaction_id)
	{
		return $this->db->get_where('transactions', array('id' => $transaction_id))->row_array();
	}
}
