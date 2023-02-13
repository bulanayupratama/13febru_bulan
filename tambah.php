<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border = "1">
    <form action="proses.php" method="POST">
<h2>tabel barang</h2>
          
        <tr>
            <td><label for="nama_peminjaman">Nama Peminjaman : </label></td>
            <td><input type="text" name="nama_peminjaman" /></td>
        </tr>
      
        <tr>
            <td><label for="alamat">Alamat : </label></td>
            <td><input type="text" name="alamat" /></td>
        </tr>
        
        <tr>
            <td><label for="umur">Umur : </label></td>
            <td><input type="number" name="umur" /></td>
        </tr>
 
        <tr>
            <td><label for="keperluan">Keperluan : </label></td>
            <td><input type="text" name="keperluan" /></td>
        </tr>

        <tr>
            <td><label for="jaminan">Jaminan : </label></td>
            <td><input type="text" name="jaminan" /></td>
        </tr>

        <tr>
            <td><label for="plat_mobil">Plat mobil : </label></td>
            <td><input type="text" name="plat_mobil" /></td>
        </tr>

        <tr>
           <td><label for="merek">Merek : </label></td>
           <td><input type="text" name="merek" /></td>
        </tr>

        <tr>
            <td><label for="jenis_mobil">Jenis Mobil : </label></td>
            <td><input type="text" name="jenis_mobil" /></td>
        </tr>

        <tr>
            <td><label for="tahun_mobil">Tahun Mobil : </label></td>
            <td><input type="text" name="tahun_mobil" /><td>
        </tr>

        <tr>
            <td><label for="tanggal_pinjam">Tanggal Pinjam : </label></td>
            <td><input type="date" name="tanggal_pinjam" /></td>
        </tr>

        <tr>
            <td><label for="tanggal_kembali">Tanggal Kembali : </label></td>
            <td><input type="date" name="tanggal_kembali" /></td>
        </tr>

        <tr>
            <input type="submit" name="simpan" value="simpan" />
        </tr>
</form>
</body>
</html>