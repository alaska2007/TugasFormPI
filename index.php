<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head> 
	<title>CRUD 2020 PHP & MySQL + Bootstrap 4 </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="text-center">CRUD PHP & MySQL + Bootstrap4</h1>
<form action="crud.php" method="post">

<!-- Awal Card From -->
<div class="card mt-3">
  <div class="card-header bg-primary text-white">
    Form Input Data Mahasiswa
  </div>
  <div class="card-body">
    <form method="post" action="">
    	<div class="form-group">
    		<label>NIM</label>
    		<input type="text" name="tnim" value="<?=@$vnim?>" class="form-control" placeholder="Input NIM anda disini!" required>
    	</div>
    	<div class="form-group">
    		<label>Nama</label>
    		<input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Input Nama anda disini!" required>
    	</div>
    	<div class="form-group">
    		<label>Alamat</label>
    		<textarea class="form-control" name="talamat" placeholder="Input Alamat anda disini!" required><?=@$valamat?></textarea> 
    	</div>
    	<div class="form-group">
    		<label>Program Studi</label>
    		<select class="form-control" name="tprodi">
    			<option value="<?=$vprodi?>"><?=@$vprodi?></option>
    			<option value="D3-MI">D3-MI</option>
    			<option value="S1-SI">S1-SI</option>
    			<option value="S1-TI">S1-TI</option>
    		</select>
    	</div>

    	<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
    	<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

    </form>
  </div>
</div>
<!-- Akhir Card From -->
	
	<!-- Awal Card Tabel -->
<div class="card mt-3">
  <div class="card-header bg-success text-white">
    Daftar Mahasiswa
  </div>
  <div class="card-body">
    
  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>No.</th>
  			<th>Nim</th>
  			<th>Nama</th>
  			<th>Alamat</th>
  			<th>Program Studi</th>
  			<th>Aksi</th>
  		</tr>
  		<?php
  			$no = 1;
  			$tampil = mysqli_query($koneksi, "SELECT * from tmhs order by id_mhs desc");
  		while($data = mysqli_fetch_array($tampil)) :

  		?>
  		<tr>
  			<td><?=$no++;?></td>
  			<td><?=$data['nim']?></td>
  			<td><?=$data['nama']?></td>
  			<td><?=$data['alamat']?></td>
  			<td><?=$data['prodi']?></td>
  			<td>
  				<a href="index.php?hal=edit&id=<?=$data['id_mhs']?>"class="btn btn-warning">Edit</a>
  				<a href="index.php?hal=hapus&id=<?=$data['id_mhs']?>" 
  					onclick="return confirm('Apakah yakin ingin menghapus data ini?') "class="btn btn-danger">Hapus</a>
  			</td>
  		</tr>
  	<?php endwhile; //penutup perulangan while ?>
  	</table>

  </div>
</div>
<!-- Akhir Card Tabel -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>