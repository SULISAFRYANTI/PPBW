<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/styleedit.css">

</head>
<body>
<h2>Edit Barang</h2>
<form action="<?= BASEURL; ?>index.php?url=admin/update" method="POST">
    <input type="hidden" name="id" value="<?= $data['item']['id']; ?>">
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" id="nama" value="<?= $data['item']['nama']; ?>" required><br><br>
    <label for="stok">Stok:</label><br>
    <input type="number" name="stok" id="stok" value="<?= $data['item']['stok']; ?>" required><br><br>
    <label for="harga">Harga:</label><br>
    <input type="number" name="harga" id="harga" value="<?= $data['item']['harga']; ?>" required><br><br>
    <button type="submit">Update</button>
</form>
</body>
</html>