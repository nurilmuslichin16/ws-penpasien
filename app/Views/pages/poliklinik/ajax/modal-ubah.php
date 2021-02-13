<div class="modal fade" id="modal-ubah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title"><i class="fa fa-plus-square"></i> &nbsp;Ubah Poliklinik</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('/poliklinik/ubah', ['class' => 'form-ubah']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <input type="hidden" class="form-control" id="id_poliklinik" name="id_poliklinik" value="<?= $id; ?>">
                        <div class="form-group">
                            <label for="nama_poliklinik">Nama Poliklinik</label>
                            <input type="text" class="form-control" id="nama_poliklinik" name="nama_poliklinik" value="<?= $nama; ?>">
                            <div class="invalid-feedback" id="error-nama"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success" id="btn-submit">Ubah</button>
            </div>
            <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    function bersihkan_form() {
        $('#nama_poliklinik').removeClass('is-invalid');
        $('#error-nama').empty();
    }

    function notif_sukses(pesan) {
        Swal.fire({
            title: 'Data Diubah',
            text: pesan,
            icon: 'success',
            showConfirmButton: false,
            timer: 2000
        })
    }

    $(document).ready(function() {
        $('.form-ubah').submit(function(e) {
            e.preventDefault()
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('#btn-submit').attr('disable', 'disabled');
                    $('#btn-submit').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('#btn-submit').removeAttr('disable');
                    $('#btn-submit').html('Ubah');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.nama_poliklinik) {
                            $('#nama_poliklinik').addClass('is-invalid');
                            $('#error-nama').html(response.error.nama_poliklinik);
                        }
                    } else {
                        bersihkan_form();
                        notif_sukses(response.sukses);

                        $('#modal-ubah').modal('hide');
                        dataPoliklinik();
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        })
    })
</script>