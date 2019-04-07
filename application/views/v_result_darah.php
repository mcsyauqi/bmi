	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SehatIn | Hasil Tekanan Darah</title>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Footer-with-button-logo.css">
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo.png">
	</head>
	<body>

		<div class="container box-home">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-centered home-title">
					<h3>Hasil Tekanan Darah Anda</h3>
				</div>
			</div>
			<div class="row bmi-result">
				<div class="col-md-4 col-md-offset-4">
					<h2 class="result-bmi">120/80 mmHg</h2>
					<h4 class="result-bmi">Tekanan darah anda normal</h4>
					<a href="<?php echo site_url(); ?>" class="btn btn-success btn-custom-blue">Kembali ke menu utama</a>
				</div>
			</div>
		</div>

		<div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
	</div>

		<?php
		include ('v_footer.php');
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</body>
	</html>