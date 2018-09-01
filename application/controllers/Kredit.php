<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kredit extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();


        $sess_level = $this->session->userdata('admin_level');

        $this->data['admin_nama'] = $this->session->userdata('admin_nama');
        $this->data['admin_user'] = $this->session->userdata('admin_user');

        $menu = array();
        switch ($sess_level) {
            case 'admin':

                $menu = array(
                    array("icon" => "dashboard", "url" => "", "text" => "Dashboard"),
                    array("icon" => "user", "url" => "siswa_new", "text" => "Data Siswa"),
                    array("icon" => "th-list", "url" => "m_guru", "text" => "Data Guru/Dosen"),
                    array("icon" => "tasks", "url" => "m_mapel", "text" => "Data Mapel"),
                    array("icon" => "folder-open", "url" => "m_soal", "text" => "Soal"),
                    array("icon" => "file", "url" => "h_ujian", "text" => "Hasil Ujian"),
                    array("icon" => "euro", "url" => "m_spp", "text" => "Data Administrasi"),
                    array("icon" => "upload", "url" => "m_upload", "text" => "Upload Soal"),
                    array("icon" => "book", "url" => "m_absensi", "text" => "Data Absensi"),
                );
                break;
            case 'siswa':
                $menu = array(
                    array("icon" => "dashboard", "url" => "", "text" => "Dashboard"),
                    array("icon" => "file", "url" => "ikuti_ujian", "text" => "Ujian"),
                    array('icon' => "download", "url" => "unduh", "text" => "Download Soal"),
                );
                break;
            case 'guru':
                $menu = array(
                    array("icon" => "dashboard", "url" => "", "text" => "Dashboard"),
                    array("icon" => "list-alt", "url" => "m_soal", "text" => "Soal"),
                    array("icon" => "file", "url" => "m_ujian", "text" => "Ujian"),
                    array("icon" => "file", "url" => "h_ujian", "text" => "Hasil Ujian"),
                );
                break;

        } 

        foreach ($menu as $key => $value) {
            $menu[$key]['warna'] = 'primary';
            if ($value['url'] == $this->router->method ) {
                $menu[$key]['warna'] = 'info';
            }
        }
        $this->data['menu'] = $menu;

        $this->data['topbar'] = $this->parser->parse('siswa/topbar.html', $this->data, true);
        $this->data['header'] = $this->parser->parse('siswa/header.html', $this->data, true);
        $this->data['footer'] = $this->parser->parse('siswa/footer.html', $this->data, true);


    }

    public function index()
    {

    }

    public function siswa($id_siswa = null)
    {
        if (isset($id_siswa)) {
            $this->db->where('id_siswa', $id_siswa);
            $siswa_detail = $this->db->get('m_siswa')->result();
            foreach ($siswa_detail as $key => $value) {


            	$this->db->join('tb_paket', 'tb_paket.id_paket = m_spp.id_paket', 'left');
            	$this->db->where('id_siswa', $value->id_siswa);
            	$spp = $this->db->get('m_spp')->result();
            	$harga_paket_terbayar = 0;
            	$harga_paket = 0;
            	foreach ($spp as $spp_key => $spp_value) {
            		$harga_paket_terbayar += $spp_value->jumlah_uang;
            		$harga_paket = $spp_value->harga_paket;
            	}
            	$value->harga_paket = $harga_paket;
            	$value->harga_paket_format = number_format($harga_paket);
            	$value->harga_paket_terbayar = $harga_paket_terbayar;
            	$value->harga_paket_terbayar_format = number_format($harga_paket_terbayar);
            	$value->harga_paket_terhutang = $harga_paket - $harga_paket_terbayar;
            	$value->harga_paket_terhutang_format = number_format($harga_paket - $harga_paket_terbayar);
            	// $value->spp = $spp;
            }
            $this->data['siswa_detail'] = $siswa_detail;
            // opn($siswa_detail);

            $this->data['content'] = $this->parser->parse('new_siswa/siswa_spp_paket.html', $this->data, true);

            $this->parser->parse('new_siswa/index.html', $this->data, false);

        }
    }
}

/* End of file Kredit.php */
/* Location: ./application/controllers/Kredit.php */
