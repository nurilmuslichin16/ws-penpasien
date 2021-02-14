<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-left">
                        <?php foreach ($breadCrumb as $key => $b) : ?>
                            <li class="<?= $key === array_key_last($breadCrumb) ? "breadcrumb-item active" : "breadcrumb-item" ?>"><?= $b; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-list"></i> &nbsp;Daftar Poliklinik</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-success" id="btn-tambah">
                                <i class="fas fa-plus-square"></i>&nbsp; Tambah Poliklinik
                            </button>
                            <hr>
                            <div class="tabel-main">

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal -->
    <div class="form-modal" style="display: none;"></div>
    <!-- /.modal -->

</div>
<!-- /.content-wrapper -->

<script>
    function dataPoliklinik() {
        $.ajax({
            url: "/poliklinik/getData",
            dataType: "json",
            success: function(response) {
                $('.tabel-main').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        })
    }

    $(document).ready(function() {
        dataPoliklinik()

        $('#btn-tambah').click(function(e) {
            e.preventDefault();

            $.ajax({
                url: "/poliklinik/formTambah",
                dataType: "json",
                success: function(response) {
                    $('.form-modal').html(response.data).show();
                    $('.form-tambah')[0].reset();

                    $('#modal-tambah').modal('show');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        })
    });
</script>

<?= $this->endSection('content'); ?>