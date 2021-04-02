<?php
	include "koneksi.php";

		
	//jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
	{
		//Pengujian apakah data di edit atau disimpan baru
		if($_GET['hal'] == "edit")
		{
			//Data akan di edit
			$edit = mysqli_query($koneksi, " UPDATE tmhs set 
				nim = '$_POST[tnim]',
				nama = '$_POST[tnama]',
				alamat = '$_POST[talamat]',
				prodi = '$_POST[tprodi]'
				WHERE id_mhs = '$_GET[id]'

										");
		if($edit) //jika edit sukses
		{
			echo "<script>
					alert('Edit data sukses!');
					document.location='index.php'
				</script>";
		}
		else
		{
			echo "<script>
					alert('Edit data Gagal!');
					document.location='index.php'
				</script>";

		}
		}
		else
		{
			//Data akan di simpan baru
			$simpan =mysqli_query($koneksi, "INSERT INTO tmhs(nim, nama, alamat, prodi) VALUES ('$_POST[tnim]','$_POST[tnama]','$_POST[talamat]','$_POST[tprodi]')

			");
		if($simpan) //jika simpan sukses
		{
			echo "<script>
					alert('Simpan data sukses!');
					document.location='index.php'
				</script>";
		}
		else
		{
			echo "<script>
					alert('Simpan data Gagal!');
					document.location='index.php'
				</script>";

		}
	}


		
	}

	//pengujian jika tombol edit / hapus diklik
	if(isset($_GET['hal']))
	{
		//pengujian jika edit data
		if($_GET['hal'] == "edit")
		{
			//Tampilkan Data yang akan diedit
			$tampil = mysqli_query($koneksi, "SELECT * FROM tmhs WHERE id_mhs = '$_GET[id]' ");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//jika data ditemukan , maka data ditampung ke dalam variabel
				$vnim = $data['nim'];
				$vnama = $data['nama'];
				$valamat = $data['alamat'];
				$vprodi = $data['prodi'];
			}
		}
		else if ($_GET['hal'] == "hapus")
		{
			//Persiapan hapus data
			$hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_mhs = '$_GET[id]' ");
			if($hapus){
				echo "<script>
					alert('Hapus data Sukses!!');
					document.location='index.php';
				</script>";
			}
		}
	}

?>