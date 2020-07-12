<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="logo.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="ptsqrstats.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>

	<body>

		<ul class="nav nav-pills">
		  <li role="presentation"><a href="index.html">Αρχική</a></li>
		  <li role="presentation"><a href="skilos.php">Σκύλος</a></li>
		  <li role="presentation"><a href="gata.php">Γάτα</a></li>
		  <li role="presentation"><a href="poulia.php">Πτηνά</a></li>
		  <li role="presentation" class="active"><a href="psaria.php">Ψάρια</a></li>
		  <li role="presentation"><a href="troktika.php">Τρωκτικά</a></li>
		  <li role="presentation"><a href="trofes_skilou.php">Τροφές Σκύλου</a></li>
		  <li role="presentation"><a href="trofes_gatas">Τροφές Γάτες</a></li>
		</ul>

		<hr>

		<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12"><h1>Ψάρια</h1></div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4>ID</h4></div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4>Έτος</h4></div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4>Μήνας</h4></div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4>Τροφές</h4></div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4>Αξεσουάρ</h4></div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4>Φάρμακα</h4></div>
			</div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr></div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<?php
    		$mysqli = new mysqli("localhost", "root", "", "ptsqrstats");
		
		    $result = $mysqli->query("SELECT ps_id, etos, minas, trofes, accessories, farmaka FROM psaria ORDER BY ps_id ASC");

		if ($result -> num_rows > 0) {
			//output data of each row
			while ($row = $result->fetch_assoc()) {
				echo '<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'.$row["ps_id"].'</div>'.'<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'. $row["etos"].'</div>'.'<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'.$row["minas"].'</div>'.'<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'.$row["trofes"].'</div>'.'<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'.$row["accessories"].'</div>'.'<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'.$row["farmaka"].'</div>';
			}
		}
		else {
			echo '<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">0 αποτελέσματα</div><div class="col_c col-lg-10 col-md-10 col-sm-10 col-xs-10">';
		}
		?>

			</div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr></div>
		<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<form type="get">
		
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>Id: <select name="edit_id">
					<option value="0">Id (διαγρφή/επεξεργασία μόνο)</option>
						<?php
						//these variables are used because echo can't output the options correctly
						$var1='<option value="';
						$var2='">';
						$var3='</option>';
							$res_edit = $mysqli->query("SELECT ps_id FROM psaria");

							while ($row_edit = $res_edit->fetch_assoc()) {
								echo $var1.$row_edit["ps_id"].$var2.$row_edit["ps_id"].$var3;
							}

						?>
					</select></h4></div>
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>Έτος: <select name="etos">
					<option value="2016">2016</option>
					<option value="2017">2017</option>
				</select></h4></div>
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>Μήνας: <select name="minas">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select></h4></div>
				<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>Τροφές: <input type="text" name="trofes"></h4></div>
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>Αξεσουάρ: <input type="text" name="accessories"></h4></div>
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>Φάρμακα: <input type="text" name="farmaka"></h4></div>
			</div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
				<div class="col_c col-lg-3 col-md-3 col-sm-3 col-xs-3"><input type="submit" name="sub" value="Καταχώρηση"></div>
				<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
				<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
				<div class="col_c col-lg-3 col-md-3 col-sm-3 col-xs-3"><input type="submit" name="edit_var" value="Επεξεργασία"></div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
			</div>
				<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr></div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><input type="submit" name="del_val" value="Διαγραφή"></div>
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
			</div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr></div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><input type="submit" name="refresh_table" value="Ανανέωση"></div>
				<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
			</div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr></div>
			</form>
		</div>
	</div>
		
			

		<?php

			//addition of values to table psaria

			if (isset($_GET['sub'])) { //if button is pressed

				

				$etos = $_GET["etos"]; //checks values of etos, minas etc from form
				$minas = $_GET["minas"];
				$trofes = $_GET["trofes"];
				$accessories = $_GET["accessories"];
				$farmaka= $_GET["farmaka"];

				if (is_numeric($trofes) && is_numeric($accessories) && is_numeric($farmaka)){ //checks if values are numeric

					$query_add = $mysqli -> query("INSERT INTO psaria (Etos, Minas, Trofes, Accessories, Farmaka) Values ($etos, $minas, $trofes, $accessories, $farmaka)"); //inserts values into table


					echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';


					//header("location:psaria.php");
				}

				else {
					echo "Χρησιμπποιήστε μόνο αριθμούς και μην αφήνετε κενά πεδία.";
				}


				
			}
			elseif (isset($_GET['del_val'])) { //delete function

				$ps_id = $_GET["edit_id"];


				if ($ps_id != 0){

					if (is_numeric($ps_id)) {
						$query_del = $mysqli -> query("DELETE FROM psaria WHERE Ps_Id = '$ps_id'");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';

						//header("location:psaria.php"); 
					}
				}
				else {
						echo "Διαλέξτε το Id που θέλετε να διαγράψετε.";
				}


				

			}
			elseif (isset($_GET['refresh_table'])) { //refresh function

				/*echo '<script language="javascript">';
				echo 'location.reload(forceGet);';
				echo '</script>';*/

				echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';

				//header("location:psaria.php"); 
			}
			elseif (isset($_GET['edit_var'])) { //editi function

				$edit_id = $_GET["edit_id"];
				$etos_edit = $_GET["etos"];
				$minas_edit = $_GET["minas"];
				$trofes_edit = $_GET["trofes"];
				$accessories_edit = $_GET["accessories"];
				$farmaka_edit = $_GET["farmaka"];

				if ($edit_id != 0){
					if (is_numeric($trofes_edit) && is_numeric($accessories_edit) && is_numeric($farmaka_edit)) {
						$query_edit = $mysqli -> query("UPDATE psaria SET Etos = '$etos_edit', Minas = '$minas_edit', Trofes = '$trofes_edit', Accessories = '$accessories_edit', Farmaka = '$farmaka_edit' WHERE Ps_Id = '$edit_id'");


						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';

						//header("location:psaria.php");
					}
					elseif (empty($trofes_edit) && (is_numeric($accessories_edit) && is_numeric($farmaka_edit))) {
						$query_edit = $mysqli -> query("UPDATE psaria SET Etos = '$etos_edit', Minas = '$minas_edit', Accessories = '$accessories_edit', Farmaka = '$farmaka_edit' WHERE Ps_Id = '$edit_id'");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';

						//eader("location:psaria.php");
					}
					elseif (empty($accessories_edit) && (is_numeric($trofes_edit) && is_numeric($farmaka_edit))) {
						$query_edit = $mysqli -> query("UPDATE psaria SET Etos = '$etos_edit', Minas = '$minas_edit', Trofes = '$trofes_edit', Farmaka = '$farmaka_edit' WHERE Ps_Id = '$edit_id'");


						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';

						//header("location:psaria.php");
					}
					elseif (empty($farmaka_edit) && (is_numeric($trofes_edit) && is_numeric($accessories_edit))) {
						$query_edit = $mysqli -> query("UPDATE psaria SET Etos = '$etos_edit', Minas = '$minas_edit', Accessories = '$accessories_edit', Trofes = '$trofes_edit' WHERE Ps_Id = '$edit_id'");


						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';

						//header("location:psaria.php");
					}
					elseif (empty($trofes_edit) && empty($accessories_edit) && is_numeric($farmaka_edit)) {
						$query_edit = $mysqli -> query("UPDATE psaria SET Etos = '$etos_edit', Minas = '$minas_edit', Farmaka = '$farmaka_edit' WHERE Ps_Id = '$edit_id'");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';
					}
					elseif (empty($trofes_edit) && empty($farmaka_edit) && is_numeric($accessories_edit)) {
						$query_edit = $mysqli -> query("UPDATE psaria SET Etos = '$etos_edit', Minas = '$minas_edit', Accessories = '$accessories_edit' WHERE Ps_Id = '$edit_id'");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';

						//header("location:psaria.php");
					}
					elseif (empty($farmaka_edit) && empty($accessories_edit) && is_numeric($trofes_edit)) {
						$query_edit = $mysqli -> query("UPDATE psaria SET Etos = '$etos_edit', Minas = '$minas_edit', Trofes = '$trofes_edit' WHERE Ps_Id = '$edit_id'");


						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';
						//header("location:psaria.php");
					}
					elseif ((empty($trofes_edit) && empty($accessories_edit) && empty($farmaka_edit)) || (!is_numeric($trofes_edit) || !is_numeric($accessories_edit) || !is_numeric($farmaka_edit))) {
						echo "Έχετε αφήσει όλα τα πεδία κενά ή δεν χρησιμοποιήσατε αριθμούς. Προσπαθήστε ξανά.";
					}



				}

				else {
					echo "Διαλέξτε το Id που θέλετε να επεξεργαστείτε.";
				}
			}

		?>


		<!--<br>
		<a href="index.html">Αρχική</a> -
		Σκύλος -
		<a href="gata.php">Γάτα</a> -
		<a href="psaria.php">Πουλιά</a> -
		<a href="psaria.php">Ψάρια</a> -
		<a href="troktika.php">Τρωκτικά</a> -
		<a href="trofes_skilou.php">Τροφές Σκύλου</a> -
		<a href="trofes_gatas">Τροφές Γάτες</a> -->

		<?php
		mysqli_close($mysqli);
		?>


	</body>
</html>