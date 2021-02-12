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
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $("#tabelMain").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#tabelMain_wrapper .col-md-6:eq(0)');
    });
</script>