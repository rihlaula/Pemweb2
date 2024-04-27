<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM pasien";
$pasiens = $dbh->query($query);
?>

<div class="contaner-fluid px-4">
    <div class="d-flex mt-4">
    <h3 class="me-auto">Pasien</h3>
    <a href="#" class="btn btn-primary">Tambahkan Pasien</a>
    </div>

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
            <th>JK</th>
            <th>Alamat</th>
            <th>Opsi</th>

        </tr>

        <?php
        $no = 0;
        foreach($pasiens as $pasiens): ?>
        <tr>
            <td><?=$no = $no += 1; ?></td>
            <td><?=$pasiens['nama']?></td>
            <td><?=$pasiens['tmp_lahir']?></td>
            <td><?=$pasiens['tgl_lahir']?></td>
            <td><?=$pasiens['gender']?></td>
            <td><?=$pasiens['alamat']?></td>
            <td>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>

            </td>

        </tr>

        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>