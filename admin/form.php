<?php
$data3 = queryAll("SELECT * FROM data_form");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Form</title>
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
    <h1 class='page mb-4'>Data Form</h1>
    
    <?php if (empty($data3)) : ?>
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
              <th>Email</th>
              <th>Subjek</th>
              <th>Pesan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php
              $no = 1;
              foreach($data3 as $row) :
          ?>
          <tbody>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $row['Nama']; ?></td>
              <td><?php echo $row['Email']; ?></td>
              <td><?php echo $row['Subjek']; ?></td>
              <td><?php echo $row['Pesan']; ?></td>
              <td>
                <a onclick="return confirm('Apakah yakin menghapus data ?')" href="hapus_form.php?id_form=<?= $row['id_form']; ?>" class='btn btn-danger-custom'><i class="bi bi-trash-fill"></i>Hapus</a>
              </td>
            </tr>
          </tbody>
          <?php endforeach; ?>
        </table>
      </div>
    <?php endif; ?>
  </div>

  <!-- Link to Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
