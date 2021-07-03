<?php
	$servername	="localhost";
	$username	="root";
	$password	="";
	$database	="pendidikan";

		$koneksi = mysqli_connect($servername, $username, $password, $database);

			if (!$koneksi) {
				echo "Gagal terhubung ke dalam database";
			}
?>