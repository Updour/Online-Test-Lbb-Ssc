<form action="" class="hidden form-horizontal" enctype="multipart/form-data" method="POST" role="form">
    <div class="form-group">
        <div class="col-sm-12">
            <legend>
                SOAL DATA
            </legend>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">
            Nama :
        </label>
        <div class="col-sm-10 ">
            <input id="id" name="id" type="hidden"/>
            <input class="form-control" id="nama" name="nama" required="required" type=""/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">
            Isi Soal :
        </label>
        <div class="col-sm-10">
            <input class="form-control" id="isi_soal" name="isi_soal" required="required" type=""/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">
            Gambar :
        </label>
        <div class="col-sm-10">
            <input class="form-control" id="file_gambar" name="file_gambar" type="file"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button class="btn btn-primary" type="submit">
                Submit
            </button>
        </div>
    </div>
</form>
<!-- -->
<div>
    <hr/>
    <h4>
        <a class="btn btn-primary" data-toggle="modal" href="#edit_upload">
            Tambah
        </a> 
        DATA HASIL UPLOAD
    </h4>
    <table class="table table-hover table-bordered table-stripped">
        <thead>
            <tr class="bg-success">
                <th>
                    ID
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Isi Soal
                </th>
                <th>
                    Gambar
                </th>
                <th>
                    Action
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
                <td>
                    <button class="btn btn-warning btn-xs btn_edit" data-id="{id}" data-isi_soal="{isi_soal}" data-nama="{nama}">
                        Edit
                    </button>
                    <a class="btn btn-danger btn-xs" href="{base}/adm/delete/{id}" onclick="return confirm('Are you sure..?\n\nWarning: This action can\'t be undone...!!!')">
                        Delete
                    </a>
                </td>
            </tr>
            {/upload_data}
        </tbody>
    </table>
</div>
<!-- .................. -->
<div class="modal fade" id="edit_upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" enctype="multipart/form-data" method="POST">
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                    </button>
                    <h4 class="modal-title">
                        Edit
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">
                            Nama :
                        </label>
                        <div class="col-sm-10 ">
                            <input id="modal_id" name="id" type="hidden"/>
                            <input class="form-control" id="modal_nama" name="nama" required="required" type=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">
                            Isi Soal :
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control" id="modal_isi_soal" name="isi_soal" required="required" type=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">
                            Gambar :
                        </label>
                        <div class="col-sm-10">
                            <input class="form-control" id="modal_file_gambar" name="file_gambar" type="file"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type="button">
                        Cancel
                    </button>
                    <button class="btn btn-primary" type="submit">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">

    $('#edit_upload').on('hidden.bs.modal', function(event) {
        event.preventDefault();

            $('#edit_upload').find('form')[0].reset();
            $('#edit_upload').find('form').find('input').val('');
            $('#edit_upload').find('form').find('textarea').text('');
        /* Act on the event */
    });
    $('.btn_edit').each(function(index, el) {


        var id = $(this).data('id');
        var nama = $(this).data('nama');
        var isi_soal = $(this).data('isi_soal');
        $(this).on('click', function(event) {

            event.preventDefault();
            $('#edit_upload').modal('show');

            $('#modal_id').val(id);
            $('#modal_nama').val(nama);
            $('#modal_isi_soal').val(isi_soal);


            // shoalt dhuhur dulu.. udah adzan... sip oke mas suwon


        });
    });
</script>
