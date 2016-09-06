<?php 
	
	function register()
	{
		include 'koneksi.php';

		$sql="INSERT INTO akun SET username ='$username',
									 password='$password',
									 status ='$status' ";

		$query= mysqli_query($conn, $sql);

		if ($query) {
			echo "Berhasil";
		}else{
			echo "Gagal";
		}

	}
	function FunctionName()
	{
		$sql="INSERT INTO siswa SET nama='$nama',
									 "
	}



 ?>