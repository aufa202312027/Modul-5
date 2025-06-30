<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Buku Tamu Digital STITEK Bontang</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    margin: 0;
    padding: 0;
  }

  .container {
    width: 60%;
    margin: 40px auto;
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }

  h1 {
    text-align: center;
    color: #007bff;
    margin-bottom: 30px;
  }

  label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    font-size: 14px;
  }

  textarea {
    resize: vertical;
  }

  .error {
    background-color: #ffe6e6;
    border: 1px solid #ff0000;
    color: #b30000;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
  }

  .success {
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
    padding: 20px;
    border-radius: 8px;
    color: #155724;
    margin-bottom: 30px;
  }

  button {
    background-color: #007bff;
    color: white;
    padding: 12px 24px;
    font-size: 14px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #0056b3;
  }
</style>

</head>
<body>
<div class="container">
  <h1>Buku Tamu Digital STITEK Bontang</h1>

  <?php
  // Inisialisasi variabel
  $nama = $email = $pesan = "";
  $errors = [];

  // Jika form disubmit
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dan validasi
    if (empty($_POST["nama"])) {
      $errors[] = "Nama Lengkap tidak boleh kosong.";
    } else {
      $nama = htmlspecialchars($_POST["nama"]);
    }

    if (empty($_POST["email"])) {
      $errors[] = "Email tidak boleh kosong.";
    } else {
      $email = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["pesan"])) {
      $errors[] = "Pesan/Komentar tidak boleh kosong.";
    } else {
      $pesan = htmlspecialchars($_POST["pesan"]);
    }

    // Jika tidak ada error, tampilkan data
    if (empty($errors)) {
      echo "<div class='success'>";
      echo "<h3>Terima kasih atas pesan Anda!</h3>";
      echo "<p><strong>Nama:</strong> $nama</p>";
      echo "<p><strong>Email:</strong> $email</p>";
      echo "<p><strong>Pesan:</strong><br>$pesan</p>";
      echo "</div>";
    } else {
      // Tampilkan pesan error
      echo "<div class='error'><ul>";
      foreach ($errors as $error) {
        echo "<li>$error</li>";
      }
      echo "</ul></div>";
    }
  }
  ?>

  <!-- Form Buku Tamu -->
  <form method="post" action="">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" value="<?= isset($nama) ? $nama : '' ?>">

    <label for="email">Alamat Email:</label>
    <input type="email" id="email" name="email" value="<?= isset($email) ? $email : '' ?>">

    <label for="pesan">Pesan/Komentar:</label>
    <textarea id="pesan" name="pesan" rows="5"><?= isset($pesan) ? $pesan : '' ?></textarea>

    <button type="submit">Kirim Pesan</button>
  </form>
</div>
</body>
</html>
