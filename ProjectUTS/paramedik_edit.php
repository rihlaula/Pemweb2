<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");
$unit_kerja_id = $dbh->query('SELECT * FROM unit_kerja');

$id = $_GET['id'];
$pasien = $dbh->query("SELECT * FROM paramedik WHERE id = $id")->fetch();
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Paramedik</h1>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="paramedik_update.php" method="POST">
        <input type="hidden" name="id" value="<?= $pasien["id"] ?>">

        <div class="form-group row">
            <label for="id" class="col-4 col-form-label">ID</label>
            <div class="col-8">
                <input id="id" name="id" type="text" class="form-control" required="required" value="<?= $pasien["id"] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $pasien["nama"] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required" <?= $pasien["gender"] == 'L' ? 'checked' : '' ?>>
                    <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" required="required" <?= $pasien["gender"] == 'P' ? 'checked' : '' ?>>
                    <label for="gender_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
                <input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control" required="required" value="<?= $pasien["tempat_lahir"] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <input id="tanggal_lahir" name="tanggal_lahir" type="date" class="form-control" required="required" value="<?= $pasien["tanggal_lahir"] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori" class="col-4 col-form-label">Kategori</label>
            <div class="col-8">
                <input id="kategori" name="kategori" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="telpon" class="col-4 col-form-label">telpon</label>
            <div class="col-8">
                <input id="telpon" name="telpon" type="text" class="form-control" required="required" value="<?= $pasien["telpon"] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control"><?= $pasien["alamat"] ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="unit_id_kerja" class="col-4 col-form-label">Unit Kerja</label>
            <div class="col-8">
                <select id="unit_id_kerja" name="unit_id_kerja" class="custom-select" required="required">
                    <option value="">-- Pilih Unit Kerja --</option>
                    <?php foreach ($unit_kerja_id as $kel) : ?>
                        <option <?= $pasien["unit_kerja_id"] == $kel['id'] ? 'selected' : '' ?> value="<?= $kel['id'] ?>"><?= $kel['nama'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<?php
include_once("bottom.php");
?>