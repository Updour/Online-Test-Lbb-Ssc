    <h4>
      DATA ABSENSI SISWA
    </h4>
    <table class="table table-bordered table-hover  table-stripped" >
        <thead>
            <tr class="bg-success">
                <th>NO</th>
                <th>Nama Soal  </th>
                <th>Isi Soal
                </th>
                <th>Data Soal
                </th>
                
            </tr>
        </thead> 
        <tbody>
            {upload_data}
            <tr>
                <td>
                    {id}
                </td>
                <td>
                    {nama}
                </td>
                <td>
                    {isi_soal}
                </td>
                <td>
                    <a href="{base}/assets/upload/{gambar}" target="_blank">
                        {gambar}
                    </a>
                </td>
                <!-- <td>
                    <button class="btn btn-warning btn-xs btn_edit" data-id="{id}" data-isi_soal="{isi_soal}" data-nama="{nama}">
                        Edit
                    </button>
                    <a class="btn btn-danger btn-xs" href="{base}/contoh/delete/{id}" onclick="return confirm('Are you sure..?\n\nWarning: This action can\'t be undone...!!!')">
                        Delete
                    </a>
                 --></td>
            </tr>
            {/upload_data}
        </tbody>
    </table>
</div>
<!-- <script type="text/javascript">
	$('.btn_edit').each(function(index, el) {
		var id = $(this).data('id');
		var nama = $(this).data('nama');
		var isi_soal = $(this).data('isi_soal');
		$(this).on('click', function(event) {
			event.preventDefault();
			$('#id').val(id);
			$('#nama').val(nama);
			$('#isi_soal').val(isi_soal);
		});
	});
</script> -->