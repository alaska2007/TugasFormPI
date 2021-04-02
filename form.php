<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran</title>
</head>
<body>

<h2>Form Pendaftaran mahasiswa baru</h2>
<h2>by admin universitas</h2>
    <form method="post">
	<table>
          <tr>
              <td><label>NIM</label></td><td><input type="text" name="nim" placeholder="Masukan nim" /></td>
	  </tr>
	  <tr>
	      <td><label>Nama:</label></td><td><input type="text" name="nama" placeholder="Masukan Nama" /></td>
	  </tr>
	  <tr>
	      <td><label>Alamat:</label></td><td><textarea name="alamat" rows="5" placeholder="Masukan Alamat" ></textarea></td>
	  </tr>
	  <tr>
              <td><label>Program Studi:</label></td><td><input placeholder="pilih prodi" /></td>
	  </tr>
	</table>
      <button type="simpan" name="simpan">Simpan</button>
    </form>
</body>
</html>