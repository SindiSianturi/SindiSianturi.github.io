<?php 

$data2 = queryAll("SELECT * FROM tabel_admin");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Admin</title>
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
    .table th, .table td {
      text-align: center;
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
    .alert-custom {
      border-radius: 0.25rem;
      background-color: #f8d7da;
      color: #721c24;
      padding: 15px;
      margin: 20px 0;
    }
    h1 {
      margin-bottom: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class='page mb-4'>Data Admin</h1>
    <a href="tambah_admin.php" class='btn btn-custom mb-3 d-block mx-auto'><i class="fas fa-plus"></i> Tambah Admin</a>
    
    <?php if (empty($data2)) : ?>
      <div class="alert-custom text-center">
        Data tidak ditemukan!
      </div>
    <?php else: ?>
      <div class='table-responsive'>
        <table class='table table-striped table-bordered'>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Password</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach($data2 as $row) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($row['nama_admin']); ?></td>
                <td><?= htmlspecialchars($row['password']); ?></td>
                <td>
                  <a onclick="return confirm('Apakah yakin menghapus data ?')" href="hapus_admin.php?id_admin=<?= $row['id_admin']; ?>" class="btn btn-danger-custom btn-sm">
                    <i class="fas fa-trash"></i> Hapus
                  </a>
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
