<?php
/**
* 
*/
class Siswa extends CI_Controller
{
	public function index()
	{
		$siswa = $this->db->get('m_siswa')->result();
		echo "print_r($siswa)";
			exit();

			$this->load->view('m_spp');
	}	
}