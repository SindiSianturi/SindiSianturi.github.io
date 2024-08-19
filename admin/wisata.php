<?php 
include_once 'fungsi.php'; // Sertakan file fungsi.php untuk mengakses fungsi queryAll

$data = queryAll("SELECT * FROM tabel_objek_wisata");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Wisata</title>
  <!-- Link to Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
  body {
    background-color: #d4edda; /* Soft green background */
    margin: 0;
    padding: 0;
    height: 100vh;
    font-display: ;
    justify-content: baseline;
    align-items: flex-start; /* Align items at the top */
  }

  .container {
    background-color: #ffffff; /* White background */
    padding: 10px;
    border-radius: 40px;
    width: 100%;
    max-width: 1200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for better visibility */
  }

  .table {
    font-size: 20px; /* Slightly larger font size for better readability */
    margin: auto;
  }

  .table th,
  .table td {
    align-self: start;
  }

  .btn-custom {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
  }

  .btn-custom:hover {
    color: #fff;
    background-color: #0056b3;
    border-color: #004085;
  }

  .btn-danger-custom {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
  }

  .btn-danger-custom:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130;
  }

  h1 {
    margin-bottom: 20px;
    text-align: center;
  }

  .btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
  }

  .btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34;   

  }
</style>
</head>
<body>
  <div class="container">
    <h1 class='page mb-4'>Data Wisata</h1>
    <a href="tambah_wisata.php" class='btn btn-custom mb-3 d-block mx-auto'><i class="fas fa-plus"></i> Tambah Wisata</a>
    
    <?php if (empty($data)) : ?>
      <div class="alert alert-warning text-center">
        Data tidak ditemukan!
      </div>
    <?php else: ?>
      <div class='table-responsive'>
        <table class='table table-striped table-bordered'>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Letak</th>
              <th>Harga Tiket</th>
              <th>Jam Operasional</th>
              <th>Gambar Tour</th>
              <th>Gambar Detail</th>
              <th>Gambar 360</th>
              <th>QR Code</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach($data as $row) : ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo htmlspecialchars($row['nama_wisata']); ?></td>
                <td><?php echo htmlspecialchars($row['letak']); ?></td>
                <td><?php echo htmlspecialchars($row['harga_tiket']); ?></td>
                <td><?php echo htmlspecialchars($row['jam_operasional']); ?></td>
                <td><img src="../img/<?php echo htmlspecialchars($row['gambar_tour']); ?>" width="80" alt="Gambar Tour"></td>
                <td><img src="../img/<?php echo htmlspecialchars($row['gambar_detail']); ?>" width="80" alt="Gambar Detail"></td>
                <td><img src="../img/<?php echo htmlspecialchars($row['gambar_360']); ?>" width="80" alt="Gambar 360"></td>
                <td><img src="../img/<?php echo htmlspecialchars($row['qrcode']); ?>" width="80" alt="QR Code"></td>
                <td><?php echo htmlspecialchars($row['deskripsi']); ?></td>
                <td>
                  <a href="edit_wisata.php?id_wisata=<?= $row['id_wisata']; ?>" class="btn btn-success mb-3"><i class="fas fa-pencil-alt"></i> Edit</a>
                  <a onclick="return confirm('Apakah yakin menghapus data ?')" href="hapus_wisata.php?id_wisata=<?= $row['id_wisata']; ?>" class="btn btn-danger-custom btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>

  <!-- Link to Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
