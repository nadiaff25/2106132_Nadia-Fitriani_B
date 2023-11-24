<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Data Acara</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kotak-form">
    <h2>Formulir Data Acara</h2><br>
    <form action="./proses_input.php" method="post">
        <label for="nama_acara">Nama Acara:</label>
        <input type="text" id="nama_acara" name="nama_acara" maxlength="100" class="form-input" required>

        <label for="id">ID (Minimum 6 Karakter):</label>
        <input type="text" name="id" id="id" pattern=".{6,}" tittle="ID harus memiliki minimal 6 karakter" class="form-input" required>

        <label for="tanggal">Tanggal Acara:</label>
        <input type="date" id="tanggal" name="tanggal" class="form-input" required>

        <label for="lokasi">Lokasi Acara:</label>
        <input type="text" id="lokasi" name="lokasi" maxlength="100" class="form-input">

        <label for="deskripsi">Deskripsi Acara:</label>
        <textarea name="deskripsi" id="deskripsi" cols="50" rows="4" maxlength="100" class="form-input"></textarea>

        <button type="submit" id="btn-simpan">Simpan</button>
    </form>
    </div>
</body>
</html>