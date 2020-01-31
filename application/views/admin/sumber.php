<div class="row">
        <div class="col-lg-3 col-xs-6">
         <h3>Ini Adalah Halaman Daftar Sumber</h3>
      
</div>
<form method="post" action="<?= site_url('admin/edit') ?>" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group row">
                <label for="kode" class="col-sm-4">Kode Barang</label>
                <div class="col-sm-8">
                    <input type="text" name="kode" id="kode" class="form-control-sm form-control" value="<?= $barang->kode ?>">
                    <?= form_error('kode', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenisbrg" class="col-sm-4">Jenis Barang</label>
                <div class="col-sm-8">
                    <input type="text" name="jenisbrg" id="jenisbrg" class="form-control-sm form-control" value="<?= $barang->jenisbrg ?>">
                    <?= form_error('jenisbrg', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="merek" class="col-sm-4">Merek</label>
                <div class="col-sm-8">
                    <input type="text" name="merek" id="merek" class="form-control-sm form-control" value="<?= $barang->merek ?>">
                    <?= form_error('merek', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="model" class="col-sm-4">Model</label>
                <div class="col-sm-8">
                    <input type="text" name="model" id="model" class="form-control-sm form-control" value="<?= $barang->model ?>">
                    <?= form_error('model', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="warna" class="col-sm-4">Warna</label>
                <div class="col-sm-8">
                    <input type="text" name="warna" id="warna" class="form-control-sm form-control" value="<?= $barang->warna ?>">
                    <?= form_error('warna', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="serial" class="col-sm-4">Serial Number</label>
                <div class="col-sm-8">
                    <input type="text" name="serial" id="serial" class="form-control-sm form-control" value="<?= $barang->serial ?>">
                    <?= form_error('serial', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="deskrippsi" class="col-sm-4">Deskripsi</label>
                <div class="col-sm-8">
                    <textarea type="text" name="deskripsi" id="deskripsi" class="form-control-sm form-control"><?= $barang->deskripsi ?></textarea>
                    <?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4">Status</label>
                <div class="col-sm-8">
                    <input type="text" name="status" id="status" class="form-control-sm form-control" value="<?= $barang->status ?>">
                    <?= form_error('status', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="lokasi" class="col-sm-4">Lokasi</label>
                <div class="col-sm-8">
                    <input type="text" name="lokasi" id="lokasi" class="form-control-sm form-control" value="<?= $barang->lokasi ?>">
                    <?= form_error('lokasi', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $barang->id ?>">
                <input type="hidden" name="gambarLama" value="<?= $barang->gambar ?>">
                <label for="gambar"><img src="<?= base_url('assets/img/barang/') . $barang->gambar ?>" id="output" class="img-thumbnail rounded"></label>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input class="" type="file" accept="image/*" onchange="loadFile(event)" id="gambar" name="gambar">
                </div>
            </div>

            <a href="<?= site_url('admin') ?>" class="btn btn-info">Kembali</a>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </div>
</form>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>