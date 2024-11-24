<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/styleadd.css">
</head>
<body>
<h2>Tambah Item</h2>
<form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST">
    <label for="nama">Nama Barang:</label><br>
    <input type="text" name="nama" id="nama" required><br><br>
    <label for="harga">ID</label><br>
    <input type="number" name="harga" id="harga" required><br><br>
    <label for="stok">Stok:</label><br>
    <input type="number" name="stok" id="stok" required><br><br>
    <label for="harga">Harga:</label><br>
    <input type="number" name="harga" id="harga" required><br><br>
    <button type="submit">Simpan</button>
</form>
</body>
</html>



