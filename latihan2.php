<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota di Indonesia</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- Header / Navbar -->
    <header class="bg-primary text-white py-4 shadow-sm">
        <div class="container">
            <h1 class="mb-0">Kota di Indonesia</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow-1 py-4">
        <div class="container">
            <div class="row g-4">
                <!-- Sidebar Menu -->
                <aside class="col-lg-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Menu Kota</h5>
                        </div>
                        <nav class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action active">Jakarta</a>
                            <a href="#" class="list-group-item list-group-item-action">Depok</a>
                            <a href="#" class="list-group-item list-group-item-action">Surabaya</a>
                        </nav>
                    </div>
                </aside>

                <!-- Main Content Area -->
                <div class="col-lg-9">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h2 class="mb-0">Jakarta</h2>
                        </div>
                        <div class="card-body">
                            <!-- Form -->
                            <form method="post" action="" class="mb-4">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>

                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">Nomor HP:</label>
                                    <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                                </div>

                                <div class="mb-3">
                                    <label for="ttl" class="form-label">TTL:</label>
                                    <input type="date" class="form-control" id="ttl" name="ttl" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nilai_tugas1" class="form-label">Nilai Tugas 1:</label>
                                    <input type="number" class="form-control" id="nilai_tugas1" name="nilai_tugas1" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nilai_tugas2" class="form-label">Nilai Tugas 2:</label>
                                    <input type="number" class="form-control" id="nilai_tugas2" name="nilai_tugas2" required>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>

                            <!-- Hasil Form -->
                            <?php if (isset($_POST['submit'])): ?>
                                <hr>
                                <h4 class="mb-3">Hasil Pengisian</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th width="30%">Nama</th>
                                                <td><?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nomor HP</th>
                                                <td><?php echo isset($_POST['no_hp']) ? htmlspecialchars($_POST['no_hp']) : ''; ?></td>
                                            </tr>
                                            <tr>
                                                <th>TTL</th>
                                                <td><?php echo isset($_POST['ttl']) ? htmlspecialchars($_POST['ttl']) : ''; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nilai Tugas 1</th>
                                                <td><?php echo isset($_POST['nilai_tugas1']) ? (float)$_POST['nilai_tugas1'] : 0; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nilai Tugas 2</th>
                                                <td><?php echo isset($_POST['nilai_tugas2']) ? (float)$_POST['nilai_tugas2'] : 0; ?></td>
                                            </tr>
                                            <tr class="table-info">
                                                <th>Total Nilai (Tugas 1 + Tugas 2)</th>
                                                <td><strong><?php echo (isset($_POST['nilai_tugas1']) ? (float)$_POST['nilai_tugas1'] : 0) + (isset($_POST['nilai_tugas2']) ? (float)$_POST['nilai_tugas2'] : 0); ?></strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <div class="container">
            <p class="mb-0">Copyright &copy; 2024 - Portal Informasi Kota</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>