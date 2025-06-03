<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mglobal extends CI_Model
{

	function single_save($data, $tabel)
	{
		$this->db->trans_start();
		$this->db->trans_strict(FALSE);
		$this->db->insert($tabel, $data);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		} else {
			$this->db->trans_commit();
			return TRUE;
		}
	}

	public function simpan_multi($data, $tabel)
	{
		$this->db->trans_start();
		$this->db->trans_strict(FALSE);
		$this->db->insert_batch($tabel, $data);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		} else {
			$this->db->trans_commit();
			return TRUE;
		}
	}

	public function single_update($data, $tabel, $where)
	{
		$this->db->trans_start();
		$this->db->trans_strict(FALSE);
		$this->db->where($where);
		$this->db->update($tabel, $data);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		} else {
			$this->db->trans_commit();
			return TRUE;
		}
	}
	public function getWhere($table, $param)
	{
		$this->db->where($param);
		return $this->db->get($table);
	}
	public function grid_data($table)
	{
		return $this->db->get($table);
	}


	public function single_delete($tabel, $where)
	{
		$this->db->trans_start();
		$this->db->trans_strict(FALSE);
		$this->db->where($where);
		$this->db->delete($tabel);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		} else {
			$this->db->trans_commit();
			return TRUE;
		}
	}

	public function kd_agama()
	{
		return $this->db->query("SELECT 
									IFNULL(CONCAT('KD-', LPAD(MAX(RIGHT(a.`id_agama`, 4)) + 1, 4, '0')),
									CONCAT('KD-','0001')) AS 'kd_agama'
								FROM  `tbl_agama` a
								ORDER BY a.`incr` DESC
								LIMIT 1")->row()->kd_agama;
	}
}
