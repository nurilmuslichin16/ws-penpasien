<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title"><i class="fa fa-plus-square"></i> &nbsp;Tambah Kamar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('/kamar', ['class' => 'form-tambah']); ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="nama_kamar">Nama Kamar</label>
                            <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" placeholder="Contoh: Melati">
                            <div class="invalid-feedback" id="error-nama"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="tipe_kamar">Tipe Kamar</label>
                            <select class="form-control" id="tipe_kamar" name="tipe_kamar" style="width: 100%;">
                                <option>Pilih Tipe</option>
                                <option value="VVIP">VVIP</option>
                                <option value="VIP">VIP</option>
                                <option value="Kelas A">Kelas A</option>
                                <option value="Kelas B">Kelas B</option>
                                <option value="Kelas C">Kelas C</option>
                            </select>
                            <div class="invalid-feedback" id="error-tipe"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="jumlah_tempat_tidur">Jumlah Tempat Tidur</label>
                            <input type="number" class="form-control" id="jumlah_tempat_tidur" name="jumlah_tempat_tidur" placeholder="Contoh: 8">
                            <div class="invalid-feedback" id="error-jumlah"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success" id="btn-sumbit">Tambah</button>
            </div>
            <?= form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    function validasi_form(response) {
        if (response.error.nama_kamar) {
            $('#nama_kamar').addClass('is-invalid');
            $('#error-nama').html(response.error.nama_kamar);
        } else {
            $('#nama_kamar').removeClass('is-invalid');
            $('#error-nama').empty();
        }

        if (response.error.tipe_kamar) {
            $('#tipe_kamar').addClass('is-invalid');
            $('#error-tipe').html(response.error.tipe_kamar);
        } else {
            $('#tipe_kamar').removeClass('is-invalid');
            $('#error-tipe').empty();
        }

        if (response.error.jumlah_tempat_tidur) {
            $('#jumlah_tempat_tidur').addClass('is-invalid');
            $('#error-jumlah').html(response.error.jumlah_tempat_tidur);
        } else {
            $('#jumlah_tempat_tidur').removeClass('is-invalid');
            $('#error-jumlah').empty();
        }
    }

    function bersihkan_form() {
        $('#nama_kamar').removeClass('is-invalid');
        $('#error-nama').empty();

        $('#tipe_kamar').removeClass('is-invalid');
        $('#error-tipe').empty();

        $('#jumlah_tempat_tidur').removeClass('is-invalid');
        $('#error-jumlah').empty();
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
                        dataKamar();
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