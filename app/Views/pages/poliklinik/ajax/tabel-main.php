<table id="tabelMain" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th>Nama</th>
            <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($poliklinik as $p) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $p['nama_poliklinik']; ?></td>
                <td>
                    <div class="btn-group">
                        <button type="button" onclick="ubah(<?= $p['id_poli']; ?>)" class="btn btn-sm btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button type="button" onclick="hapus(<?= $p['id_poli']; ?>, '<?= $p['nama_poliklinik']; ?>')" class="btn btn-sm btn-danger">
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
            url: "/poliklinik/formUbah",
            data: {
                id_poli: id
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
            text: `Yakin ingin menghapus data poliklinik ${nama}?`,
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
                    url: "/poliklinik/hapus",
                    data: {
                        id_poli: id,
                        nama_poli: nama
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire(
                                'Terhapus!',
                                response.sukses,
                                'success'
                            );
                            dataPoliklinik();
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