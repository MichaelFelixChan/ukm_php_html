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

            <form action="proses_daftar.php" method="POST">
                <div class="card-body">
                        <div class="mb-3 mt-3">
                            <label for="var_npm" class="form-label">NPM:</label>
                            <input type="text" class="form-control" id="var_npm" name="var_npm" placeholder="Input NPM"/>
                        </div>

                        <div class="mb-3">
                            <label for="var_nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="var_nama" name="var_nama" placeholder="Input Nama Lengkap"/>
                        </div>

                        <div class="mb-3">
                            <label for="var_ukm" class="form-label">Pilihan UKM:</label>
                            <select class="form-select" name="var_ukm">
                                <option>UKM Programming</option>
                                <option>UKM Band</option>
                                <option>UKM Futsal</option>
                                <option>UKM Basket</option>
                                <option>UKM Paduan Suara</option>
                                <option>UKM Membaca</option>
                            </select>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Daftar</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>