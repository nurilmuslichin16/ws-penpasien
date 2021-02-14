<table id="tabelMain" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th>Nama Kamar</th>
            <th>Tipe Kamar</th>
            <th>Jumlah Tempat Tidur</th>
            <th>Tempat Tidur Terpakai</th>
            <th>Sisa Tempat Tidur</th>
            <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($kamar as $k) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $k['nama_kamar']; ?></td>
                <td><?= $k['tipe']; ?></td>
                <td><?= $k['stok_tempat_tidur']; ?> &nbsp;<small>Tempat Tidur</small></td>
                <td><?= $k['tempat_tidur_terpakai']; ?> &nbsp;<small>Tempat Tidur</small></td>
                <td><?= $k['stok_tempat_tidur'] - $k['tempat_tidur_terpakai']; ?> &nbsp;<small>Tempat Tidur</small></td>
                <td>
                    <div class="btn-group">
                        <button type="button" onclick="ubah(<?= $k['id_kamar']; ?>)" class="btn btn-sm btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button type="button" onclick="hapus(<?= $k['id_kamar']; ?>, '<?= $k['nama_kamar']; ?>')" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $("#tabelMain").DataTable();
    });

    function ubah(id) {
        $.ajax({
            type: 'POST',
            url: "/kamar/formUbah",
            data: {
                id_kamar: id
            },
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('.form-modal').html(response.data).show();
                    $('.form-ubah')[0].reset();

                    $('#modal-ubah').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        })
    }

    function hapus(id, nama) {
        Swal.fire({
            title: 'Peringatan!',
            text: `Yakin ingin menghapus data kamar ${nama}?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: "/kamar/hapus",
                    data: {
                        id_kamar: id,
                        nama_kamar: nama
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire(
                                'Terhapus!',
                                response.sukses,
                                'success'
                            );
                            dataKamar();
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                })
            }
        })
    }
</script>