<?php
	require_once('config.php');
	require_once('Controller.php');

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$ktp = $_POST['no_ktp'];
		$phone = $_POST['no_telp'];
		$alamat = $_POST['alamat'];

		if (!empty($nama) && !empty($ktp) && !empty($phone) && !empty($alamat)) {
			$create = Controller::create_data($nama, $ktp, $phone, $alamat);
			header('Location: index.php');
		}
		else
		{
			echo "<script>alert('Isiin yg kosong dulu gan');</script>";
		}
	}
?>