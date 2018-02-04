
		$a['data'] = $this->db->query("SELECT absensi.hari,absensi.tanggal,absensi.ket_siswa, m_siswa.* FROM absensi,m_siswa WHERE absensi.id=m_siswa.id = '$uri4'	")->result();


		SELECT absensi.*, m_siswa.* FROM absensi,m_siswa WHERE 
			absensi.id_absen=m_siswa.id 