<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading">Data Administrasi
      <div class="tombol-kanan">
       
        <a href='<?php echo site_url(); ?>adm/m_soal/cetak/<?php echo $uri4; ?>' 
          class='btn btn-info btn-sm' target='_blank'>
            <i class='glyphicon glyphicon-print'></i> Cetak</a>

        <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_spp_e(0);">
          <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
      </div>
    </div>
    <div class="panel-body">


      <table class="table table-bordered">
        <thead>
          <tr>
            <th >No</th> 
            <th >Nomor Kwitansi</th>
            <th >NIM</th>
            <th >Jumlah Uang</th>
            <th >Tanggal Bayar</th>
            <th >Keterangan Bayar</th>
            <th >Keterangan Lain lain</th>
            <th >Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php 
            if (!empty($data)) {
              $no = 1;
              foreach ($data as $d) {
                echo '<tr>
                      <td class="ctr">'.$no.'</td>
                      <td>'.$d->no_kwitansi.'</td>
                      <td>'.$d->nim.'</td>
                      <td>Rp.&nbsp;'.$d->jumlah_uang.',00</td>
                      <td>'.$d->tgl_bayar.'</td>
                      <td>'.$d->ket_bayar.'</td>
                      <td>'.$d->ket_ll.'</td>
                      <td class="">
                      <div class="btn-group">
                      <button data-toggle="dropdown" class="btn btn-info">Manipulasi Data </button>
                      <ul class="dropdown-menu" >
                      <li>
                          <a href="#" onclick="return m_spp_e('.$d->id_spp.');" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a>
                          <a href="#" onclick="return m_spp_h('.$d->id_spp.');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a>
                          ';
                echo '</div>
                      </td>
                      </tr>
                      </li>
                      ';
              $no++;
              }
            } else {
              echo '<tr><td colspan="3">Belum ada data</td></tr>';
            }
          ?>
        </tbody>
      </table>
    
      </div>
    </div>
  </div>
</div>
                    




<div class="modal fade" id="m_spp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 id="myModalLabel">Data  Administrasi</h4>
      </div>
      <div class="modal-body">
          <form name="f_spp" id="f_spp" onsubmit="return m_spp_s();">
            <input type="hidden" name="id_spp" id="id_spp" value="0">
              <table class="table table-form">
                <tr>
                  <td style="width: 25%">Nomor Kwitansi</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="no_kwitansi" id="no_kwitansi" required>
                  </td>
                </tr>
                 <tr>
                  <td style="width: 25%">NIM</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="nim" id="nim" required>
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">Jumlah Uang</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="jumlah_uang" id="jumlah_uang" required>
                  </td>
                </tr>
                 <tr>
                  <td style="width: 25%">Tanggal Bayar</td>
                  <td style="width: 75%">
                    <input type="date" class="form-control" name="tgl_bayar" id="tgl_bayar" required>
                  </td>
                </tr>
                 <tr>
                  <td style="width: 25%">Keterangan bayar</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="ket_bayar" id="ket_bayar" required>
                  </td>
                </tr>
                 <tr>
                  <td style="width: 25%">Keterangan Lain Lain</td>
                  <td style="width: 75%">
                    <textarea class="form-control bg-" name="ket_ll" id="ket_ll" required></textarea>
                  </td>
                </tr>
              </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hid_sppden="true">Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>