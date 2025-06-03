<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_agama extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Mglobal'));
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		$data = array(
			"title"      => 'Data Agama',
			"url_index"  => 'C_agama',
			"base"       => base_url(),
			"url_grid"   => base_url('C_agama/grid'),
			"url_add"    => base_url('C_agama/add'),
			"url_edit"   => base_url('C_agama/edit'),
			"url_delete" => base_url('C_agama/remove'),
		);
		$this->load->view('agama/grid_agama', $data);
	}

	public function grid()
	{
		$hasil = $this->Mglobal->grid_data("tbl_agama")->result();
		if (empty($hasil)) {
			$jsonmsg = [
				'hasil' => 'false',
				'data_grid' => [],
			];
		} else {
			$jsonmsg = [
				'hasil' => 'true',
				'data_grid' => $hasil
			];
			
		}
		echo json_encode($jsonmsg);
	}
	function add()
	{
		$data['title']     = 'Data Agama';
		$data['title_sub'] = 'Form Tambah Agama';
		$data['url_index'] = base_url('C_agama');
		$data['url_sub']   = base_url('C_agama/add');
		$data['kode']      = $this->Mglobal->kd_agama();
		$this->load->view('agama/form_add', $data);
	}
	function edit($id){
		$cek_agama = $this->Mglobal->getWhere("tbl_agama", ['id_agama' => $id])->row();
		if($cek_agama != null){
			$data['id']        = $id;
			$data['title']     = 'Edit Data Agama';
			$data['title_sub'] = 'Form Edit Agama';
			$data['url_index'] = base_url('C_agama');
			$data['url_sub']   = base_url('C_agama/edit/'.$id);
			$data['data_rows']      = $cek_agama;
			$this->load->view('agama/form_edit', $data);
		}else{
			$this->index();
		}
	}
	public function simnpan_data()
	{
		$id_agama       = $this->input->post('kode');
		$nm_agama       = $this->input->post('nm_agama');
		$cek_nama_agama = $this->Mglobal->getWhere("tbl_agama", ['nama_agama' => $nm_agama])->row();
		if ($cek_nama_agama == null) {			
			$data_agama = array(
				'id_agama'   => $id_agama,
				'nama_agama' => $nm_agama,
				'dtm_create' => date('Y-m-d H:i:s'),
			);
			$cek_insert =  $this->Mglobal->single_save($data_agama, "tbl_agama");
			if ($cek_insert == 'true') {
				$jsonmsg = [
					"hasil"     => 'true',
					"pesan"       => "Data Berhasil Disimpan",
				];
				echo json_encode($jsonmsg);
			} else {
				$jsonmsg = [
					"hasil"     => 'false',
					"pesan"       => "Data gagal Disimpan",
				];
				echo json_encode($jsonmsg);
			}
		} else {
			$jsonmsg = [
				"hasil" => 'false',
				"pesan" => "Data nama Sudah Terdaftar",
			];
			echo json_encode($jsonmsg);
		}
	}
	public function update_data()
	{
		$id_agama       = $this->input->post('kode');
		$nm_agama       = $this->input->post('nm_agama');
		$nm_agama_lama       = $this->input->post('nm_agama_lama');
		if($nm_agama_lama == $nm_agama){
			$jsonmsg = [
				"hasil" => 'true',
				"pesan" => "Data Tidak Ada Perubahan Update",
			];
			echo json_encode($jsonmsg);
		}else{
			$cek_nama_agama = $this->Mglobal->getWhere("tbl_agama", ['nama_agama' => $nm_agama])->row();
			if ($cek_nama_agama == null) {			
				$data_agama = array(
					'nama_agama' => $nm_agama,
					'dtm_update' => date('Y-m-d H:i:s'),
				);
				$cek_insert =  $this->Mglobal->single_update($data_agama, "tbl_agama", ["id_agama" => $id_agama]);
				if ($cek_insert == 'true') {
					$jsonmsg = [
						"hasil"     => 'true',
						"pesan"       => "Data Berhasil Di-Update",
					];
					echo json_encode($jsonmsg);
				} else {
					$jsonmsg = [
						"hasil"     => 'false',
						"pesan"       => "Data gagal Di-Update",
					];
					echo json_encode($jsonmsg);
				}
			} else {
				$jsonmsg = [
					"hasil" => 'false',
					"pesan" => "Data nama Sudah Terdaftar",
				];
				echo json_encode($jsonmsg);
			}
		}
	}

	function delete(){
		$id = $this->input->post('post_id');
		$cekdelete = $this->Mglobal->single_delete("tbl_agama", ['id_agama' => $id]);
		if ($cekdelete == 'true') {
			$jsonmsg = [
				"hasil"     => 'true',
				"pesan"       => "Data Berhasil DiHapus",
			];
			echo json_encode($jsonmsg);
		} else {
			$jsonmsg = [
				"hasil"     => 'false',
				"pesan"       => "Data gagal DiHapus",
			];
			echo json_encode($jsonmsg);
		}
	}
}
