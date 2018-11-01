
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Paket</title>
	 <title>Bootstrap Example</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
  	<h2>Input Data Paket.</h2>
  	<form action="/action_page.php">
    <div class="form-group">
      <label for="email">Isi Paket</label>
      <input type="text" class="form-control" id="email" placeholder="Apa isi paket anda?" name="isi_paket">
    </div>
    <div class="form-group">
      <label for="pwd">Sasaran</label>
      <input type="text" class="form-control" id="pwd" placeholder="Kepada siapa paket dikirim?" name="sasaran">
     </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</body>
</html>

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

<?php 
	include 'koneksi.php';
	$isi_paket =$_POST['isi_paket'];
	$sasaran=$_POST['sasaran'];

	$query="INSERT INTO paket SET isi_paket='$isi_paket',sasaran='sasaran'";
	mysqli_query($conn,$query);

	// header("location:listpaket.php");
 ?>
