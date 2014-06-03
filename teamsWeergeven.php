<?php  
	require 'config/connect.php';
	
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>
			Teams
		</title>
	<link rel="stylesheet" href="http://bootswatch.com/simplex/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h1 class="text-center">Selecteer wedstrijd Poule-fase</h1>
		</div>
		<div class="row">
			<?php  
				$sql = "SELECT * FROM `teams` ORDER BY `id`";
				
				if (!$query = mysqli_query($con, $sql)) {
					echo 'Kan de teams niet tonen';
					exit();
				}
			?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Teamnaam</th>
						<th>Gewonnen</th>
						<th>Verloren</th>
						<th>Gelijk</th>
						<th>Poule</th>
						<th>Punten</th>
					</tr>
				</thead>
				<tbody>
					<?php  
					while ($row = mysqli_fetch_assoc($query) )
					{
						if(empty($row['verloren'])){
							$verloren = '0';
						} else {
							$verloren = $row['verloren'];
						}

						echo '<tr>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'">'.$row['naam'].'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'">'.$row['gewonnen'].'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'">'.$verloren.'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'">'.$row['gelijk'].'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'">'.$row['poule'].'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'">'.$row['totaal_punten'].'</a></td>';
						echo '</tr>'; 
					}
					?>
				</tbody>
			</table>
		</div>
		
	</div>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="js/script.js"></script>
</body>