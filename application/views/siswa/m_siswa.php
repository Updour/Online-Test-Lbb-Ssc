<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading">Data Siswa
      <div class="tombol-kanan">
        <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_siswa_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
      </div>
    </div>
    <div class="panel-body">


      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Daftar</th>
            <th>Program</th>
            <th>Sekolah</th>
            <th>No HP Siswa</th>
            <!-- <th>Nama Ayah</th>
            <th>No HP Ayah</th>
            <th>Nama Ibu</th>-->
            <!-- <th>spp</th> -->
            <th>Alamat</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php 
            if (!empty($data)) {
              $no = 1;
              foreach ($data as $d) {
                echo '<tr>
                      <td class="ctr">'.$no.'</td>
                     
                      <td>'.$d->nama.'</td>
                      <td>'.$d->tanggal_daftar.'</td>
                      <td>'.$d->program.'</td>
                      <td>'.$d->sekolah.'</td>
                     
                      <td>'.$d->no_hp_siswa.'</td>
                    
                      
                      <td>'.$d->alamat.'</td>
                      <td>'.$d->keterangan.'</td>
                      <td class="form-group">
                        <div class="btn-group">
                     <button data-toggle="dropdown" class="btn btn-info">Manipulasi Data </button>
                    <ul class="dropdown-menu" >
                     <li> 
                        <a href="#" onclick="return m_siswa_e('.$d->id.');" class="btn btn-info btn-xs">
                          <i class="glyphicon glyphicon-edit" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;&nbsp;Edit Data</a>
                        <a href="#" onclick="return m_siswa_h('.$d->id.');" class="btn btn-danger btn-xs">
                          <i class="glyphicon glyphicon-trash" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus Data</a>
                        <a href="#" onclick="return m_siswa_matkul('.$d->id.');" class="btn btn-success btn-xs">
                          <i class="glyphicon glyphicon-th-list" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Mata Kuliah</a>
                          ';
                if ($d->ada == "0") {
                  echo '        <a href="#" onclick="return m_siswa_u('.$d->id.');" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-user" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Aktifkan User</a>';
                } 
                  
              
                echo '</div>
                      </tr>
                      </li>';
              $no++;
              }
            }
          ?>
        </tbody>
      </table>
    
      </div>
    </div>
  </div>
</div>
                    




<div class="modal fade" id="m_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Siswa</h4>
      </div>
          <form name="f_siswa" id="f_siswa" onsubmit="return m_siswa_s();">
      <div class="modal-body">
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">
                <tr>
                  <td style="width: 25%">Nama</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="nama" id="nama" required>
                  </td>
                </tr>
                 <tr>
                  <td style="width: 25%">Tanggal Daftar</td>
                  <td style="width: 75%">
                    <input type="date" class="form-control" name="tanggal_daftar" id="tanggal_daftar" required>
                  </td>
                  </tr>
                <tr>
                  <td style="width: 25%">
                                Mata Pelajaran
                            </td>
                            <td style="width: 75%">
                                  <select class="form-control" name="program" required="">
                                     <option>Pilih Mata Pelajaran</option> 
                                    
                                    <option>$d->program</option>
                                  
                                </select>
                            </td>
                </tr>
                <tr>
                  <td style="width: 25%">Sekolah</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="sekolah" id="sekolah" required>
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">No HP Siswa</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="no_hp_siswa" id="no_hp_siswa" required>
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">Nama Ayah</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="nama_ayah" id="nama_ayah">
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">No HP Ayah</td>
                  <td style="width: 75%">
                      <input type="text" class="form-control" name="no_hp_ayah" id="no_hp_ayah">
                    </td>
                  </tr>
                <tr>
                  <td style="width: 25%">Nama Ibu</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="nama_ibu" id="nama_ibu">
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">No HP Ibu</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="no_hp_ibu" id="no_hp_ibu">
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">Alamat</td>
                  <td style="width: 75%">
                    <textarea class="form-control" name="alamat" id="alamat" required></textarea>
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">Keterangan</td>
                  <td style="width: 75%">
                    <input type="text" class="form-control" name="keterangan" id="keterangan" required>
                  </td>
                </tr>
              </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>