<table id="tabelMain" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Level</th>
            <th>Status</th>
            <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($web as $w) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $w['nama_lengkap']; ?></td>
                <td><?= $w['email']; ?></td>
                <td><?= $w['jekel'] == 0 ? "Laki-Laki" : "Perempuan" ?></td>
                <td>
                    <?php if ($w['level_user'] == 0) { ?>
                        <span class="right badge badge-success">Admin</span>
                    <?php } elseif ($w['level_user'] == 1) { ?>
                        <span class="right badge badge-secondary">Petugas</span>
                    <?php } else { ?>
                        <span class="right badge badge-info">Kepala Pendaftaran</span>
                    <?php } ?>
                </td>
                <td>
                    <?php if ($w['status'] == 0) { ?>
                        <span class="right badge badge-danger">Tidak Aktif</span>
                    <?php } else { ?>
                        <span class="right badge badge-success">Aktif</span>
                    <?php } ?>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" onclick="ubah(<?= $w['id_user_web']; ?>)" class="btn btn-sm btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button type="button" onclick="hapus(<?= $w['id_user_web']; ?>, '<?= $w['nama_lengkap']; ?>')" class="btn btn-sm btn-danger">
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
            url: "/manajUser/formUbahWeb",
            data: {
                id_user_web: id
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
            text: `Yakin ingin menghapus data pengguna web ${nama}?`,
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
                    url: "/manajUser/hapusWeb",
                    data: {
                        id_user_web: id,
                        nama_lengkap: nama
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire(
                                'Terhapus!',
                                response.sukses,
                                'success'
                            );
                            dataUserWeb();
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