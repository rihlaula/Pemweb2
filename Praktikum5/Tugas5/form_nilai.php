<?php
$matkul = [
    'UI/UX' => 'UI/UX',
    'Pemweb' => 'Pemrograman Web',
    'Jarkom' => 'Jaringan Komputer',
];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>

<body>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <h2 class="text-center">Form Nilai Mahasiswa</h2>

    <hr>

    <form class="mr-5 ml-5" action="data_mahasiswa.php" method="post">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <input id="nim" name="nim" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
            <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <?php foreach ($matkul as $key => $value) : ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label">Nilai</label>
            <div class="col-8">
                <input id="nilai" name="nilai" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>