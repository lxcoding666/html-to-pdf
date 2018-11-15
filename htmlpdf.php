<?php

date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['html'])) {
	
	$apikey = 'da7da1f1-89e1-4ca2-8cbc-b9efa3ad5578';
	$value = $_POST['html'];
	 
	$result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value));

	$now = date("YmdHis");

	$file = 'pdf_rezult_'.$now.'.pdf';

	header('Content-type: application/x-download');
	header('Content-Disposition: attachment; filename="'.$file.'"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: '.strlen($result));
	set_time_limit(0);
	echo $result;
	exit;

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>HTML to PDF - Spammer ID</title>
  </head>
  <body>
    
    <div class="container mt-5">
		<p class="h3 text-center">Simple HTML to PDF Converter</p>
	</div>

	<!-- input -->
	<div class="container mt-5">
		<div class="card">
			<h5 class="card-header">Enter HTML</h5>
			<div class="card-body">
				<form method="post" action="">
					<div class="form-group">
						<textarea class="form-control" id="html" name="html" rows="10" required=""></textarea>
					</div>
					<button type="submit" class="btn btn-danger">Let's Convert</button>
				</form>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="container mt-3">
		<blockquote class="blockquote text-center">
  		<footer class="blockquote-footer">Dedicated to Spammer ID</cite></footer>
		</blockquote>	
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
