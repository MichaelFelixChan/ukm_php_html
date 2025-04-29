<?php
    // Disini kita tangkap 3 variabel yang dikirim
    // dari halaman index.php
    $catch_npm = $_POST['var_npm'];
    $catch_nama = $_POST['var_nama'];
    $catch_ukm = $_POST['var_ukm'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header"><strong>Form Pendaftaran UKM</strong></div>

                <div class="card-body">
                
                        <div class="mb-3">
                            <label for="var_npm" class="form-label">NPM:</label>
                            <label for="var_npm" class="form-label"><?php echo $catch_npm; ?></label>
                        </div>

                        <div class="mb-3">
                            <label for="var_nama" class="form-label">Nama:</label>
                            <label for="var_nama" class="form-label"><?php echo $catch_nama; ?></label>
                        </div>

                        <div class="mb-3">
                            <label for="var_ukm" class="form-label">Pilihan UKM:</label>
                            <label for="var_ukm" class="form-label"><?php echo $catch_ukm; ?></label>
                        </div>

                </div>

                <div class="card-footer">
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                </div>
        </div>
    </div>
</body>
</html>