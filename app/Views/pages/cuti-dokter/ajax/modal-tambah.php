<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title"><i class="fa fa-plus-square"></i> &nbsp;Tambah Cuti Dokter</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('/cutiDokter', ['class' => 'form-tambah']); ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="dokter">Dokter</label>
                            <select class="form-control select2" id="dokter" name="dokter" style="width: 100%;">
                                <option>Pilih Dokter</option>
                                <option value="1">Nuril Muslichin</option>
                                <option value="2">Titan Yusro</option>
                                <option value="3">Ningsih</option>
                            </select>
                            <div class="invalid-feedback" id="error-dokter"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="tanggal">Tanggal Cuti</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                            <div class="invalid-feedback" id="error-tanggal"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success" id="btn-submit">Tambah</button>
            </div>
            <?= form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    function validasi_form(response) {
        if (response.error.dokter) {
            $('#dokter').addClass('is-invalid');
            $('#error-dokter').html(response.error.dokter);
        } else {
            $('#dokter').removeClass('is-invalid');
            $('#error-dokter').empty();
        }

        if (response.error.tanggal) {
            $('#tanggal').addClass('is-invalid');
            $('#error-tanggal').html(response.error.tanggal);
        } else {
            $('#tanggal').removeClass('is-invalid');
            $('#error-tanggal').empty();
        }
    }

    function bersihkan_form() {
        $('#dokter').removeClass('is-invalid');
        $('#error-dokter').empty();

        $('#tanggal').removeClass('is-invalid');
        $('#error-tanggal').empty();
    }

    function notif_sukses(pesan) {
        Swal.fire({
            title: 'Data Tersimpan',
            text: pesan,
            icon: 'success',
            showConfirmButton: false,
            timer: 2000
        })
    }

    $(document).ready(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        $('.form-tambah').submit(function(e) {
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
                    $('#btn-submit').html('Tambah');
                },
                success: function(response) {
                    if (response.error) {
                        validasi_form(response);
                    } else {
                        bersihkan_form();
                        notif_sukses(response.sukses);

                        $('#modal-tambah').modal('hide');
                        dataCutiDokter();
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    console.log(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        })
    })
</script>