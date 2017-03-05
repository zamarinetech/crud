<?php
	require_once('config.php');
	require_once('Controller.php');

	// Read Data

	$data = Controller::view_data();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
	<style type="text/css">
		.modal{
			max-height: 85%;
		}
	</style>
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
		  <!-- Modal Trigger -->
		  <br><button data-target="modal1" class="btn modal-trigger">Add Data</button>

		  <!-- Modal Structure -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Add Data</h4>
		      <div class="container">
		      	<div class="row">
				    <form class="col s12" action="model.php" method="post">
				      <div class="row">
				        <div class="input-field col s12">
				          <input id="first_name" type="text" class="validate" name="nama">
				          <label for="first_name">Nama</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <input id="" type="text" class="validate" name="no_ktp">
				          <label for="disabled">No KTP</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <input id="password" type="text" class="validate" name="no_telp">
				          <label for="password">Telephone</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <input id="email" type="text" class="validate" name="alamat">
				          <label for="email">Alamat</label>
				        </div>
				      </div>

				      <input type="submit" name="submit" class="btn">
				    </form>
				  </div>
		      </div>
		    </div>
		    <div class="modal-footer">
		     <button class="modal-close btn">Close</button>
		    </div>
		  </div>

		  <!-- End Bagian Modal -->

		  <div class="row">
		  	<div class="col s12 m12">
		  		<div class="card">
		  			<div class="card-content">
		  				 <table>
					        <thead>
					          <tr>
					              <th data-field="id">Name</th>
					              <th data-field="name">No Identity</th>
					              <th data-field="price">Phone</th>
					              <th data-field="price">Address</th>
					              <th></th>
					              <th></th>
					          </tr>
					        </thead>

					        <tbody>
					        <?php foreach ($data as $key => $row) {
					        	# code...
					        ?>
					          <tr>
					            <td><?php echo $row['nama'];?></td>
					            <td><?php echo $row['no_ktp'];?></td>
					            <td><?php echo $row['no_telp'];?></td>
					            <td><?php echo $row['alamat'];?></td>
					            <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn">Edit</a></td>
					            <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn red" name='delete'>Delete</a></td>
					          </tr>
					         <?php }  ?>
					        </tbody>
					      </table>
		  			</div>
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