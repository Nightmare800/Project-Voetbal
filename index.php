<?php
	require 'inc/connect.php';
?>

<!doctype html>
<html lang='en' />
<head>
	<script src="inc/jquery-1.11.0.js" type="text/javascript"></script>
	<link rel='stylesheet' href='inc/style.css' type='text/css' />
	<link rel="icon" href="inc/img/icon.gif" type="image/gif" />
	<link rel="stylesheet" href="http://bootswatch.com/simplex/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Voetbaltoernooi AMO1</title>
</head>
<body>
	<div class="container">
		<div class='page-header'>
			<h1 class="text-center">Live stream voetbaltoernooi AMO1</h1>
		</div>

		<div class="row">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>pagina</th>
						<th>config</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="selectwedstrijd.php">Selecteer wedstrijden</a></td>
						<td>selectwedstrijd.php</td>
					</tr>
					<tr>
						<td><a href="addscore.php">Score toevoegen</a></td>
						<td>addscore.php</td>
					</tr>
					<tr>
						<td><a href="livestream.html">Live stream kijken</a></td>
						<td>livestream.html</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class='footer'></div>
	</div><!-- Container End -->
</body>
</html>