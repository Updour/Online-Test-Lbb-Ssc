else if ($uri3 == "cetak") {
			$html = "<link href='".base_url()."___/css/style_print.css' rel='stylesheet' media='' type='text/css'/>";

			if ($a['sess_level'] == "admin") {
				$data = $this->db->query("SELECT * FROM m_spp WHERE id_spp = '$uri4'")->result();
			} 
			$spp = $this->db->query("SELECT nim FROM m_spp WHERE id_spp = '".$uri4."'")->row();

			if (!empty($data)) {
				$html .= "<h3>Mata Pelajaran : ".$spp->nim."</h3><hr style='border: solid 1px #000'>";
				$no = 1;
				foreach ($data as $d) {
					if ($d->gambar == "") {
		                $html .= '<table>
		                <tr>
			                <td style="v-align: top">'.$no.'</td>
			                <td colspan="2"><b>'.$d->nim.'</b></td>
		                </tr>';
		                $html .= '</table></div>';
		            } 
		            $no++;
				}
			} else {
				$html .= "belum ada data ut";
			}
			echo $html;
			exit();
