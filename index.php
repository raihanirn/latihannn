<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div style="padding-left:16px">
    <center>
  <h2>BIODATA</h2>
   <form method="post" action="" class="mb-4">
  <table style="width: 40%; border-collapse: collapse;" border="1">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" placeholder="Masukkan Nama Anda"></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><input type="number" name="nim" required></td>
    </tr>
    <tr>
      <td></td>
      <td><button type="submit">submit</button></td>
    </tr>
  </table>
  </form>
</div>
</center>
</body>
</html>
