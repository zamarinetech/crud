<?php 
	require_once('config.php');
	require_once('Controller.php');

	$id = $_GET['id'];
	$edit = Controller::get_id($id);

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$ktp = $_POST['no_ktp'];
		$phone = $_POST['no_telp'];
		$alamat = $_POST['alamat'];
		$id = $_POST['id'];

		if (!empty($nama) && !empty($ktp) && !empty($phone) && !empty($alamat)) {
			$update = Controller::edit_data($id, $nama, $ktp, $phone, $alamat);
			if ($update == true) {
				header('Location: index.php');
			}else{
				echo "false";
			}
		}
		else
		{
			echo "<script>alert('Isiin yg kosong dulu gan');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
</head>
<body>
<header>
  <nav class="top-nav teal lighten-1">
    <div class="nav-wrapper">
      <div class="container">
      	<a href="#" class="brand-logo">Pendataan</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="" class="active">Home</a></li>
	        <li><a href="">About Us</a></li>
	        <li><a href="">Contact Us</a></li>
	      </ul>
      </div>
    </div>
  </nav>
</header>

<main>
	<div class="container">
		<div class="card">
			<div class="card-content">
				<div class="row">
				    <form class="col s12" action="edit.php" method="post">
				      <div class="row">
				        <div class="input-field col s12">
				          <input id="first_name" type="text" class="validate" name="nama" value="<?php echo $edit['nama']; ?>">
				          <label for="first_name">Nama</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <input id="" type="text" class="validate" name="no_ktp" value="<?php echo $edit['no_ktp']; ?>">
				          <label for="disabled">No KTP</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <input id="password" type="text" class="validate" name="no_telp" value="<?php echo $edit['no_telp']; ?>">
				          <label for="password">Telephone</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <input id="email" type="text" class="validate" name="alamat" value="<?php echo $edit['alamat']; ?>">
				          <label for="email">Alamat</label>
				        </div>
				      </div>

				      <div class="row hide">
				        <div class="input-field col s12">
				          <input id="" type="text" class="validate" name="id" value="<?php echo $edit['id']; ?>">
				        </div>
				      </div>

				      <input type="submit" name="submit" class="btn">
				    </form>
				  </div>
			</div>
		</div>
	</div>
</main>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.modal-trigger').leanModal();
});
</script>
</body>
</html>