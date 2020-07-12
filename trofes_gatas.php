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
		  <li role="presentation" ><a href="skilos.php">Σκύλος</a></li>
		  <li role="presentation"><a href="gata.php">Γάτα</a></li>
		  <li role="presentation"><a href="poulia.php">Πτηνά</a></li>
		  <li role="presentation"><a href="psaria.php">Ψάρια</a></li>
		  <li role="presentation"><a href="troktika.php">Τρωκτικά</a></li>
		  <li role="presentation"><a href="trofes_skilou.php">Τροφές Σκύλου</a></li>
		  <li role="presentation" class="active"><a href="trofes_gatas">Τροφές Γάτες</a></li>
		</ul>

		<hr>

		<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12"><h1>Τροφές σκύλου</h1></div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1">Id</div>
				<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1">Id (Σκύλος)</div>
				<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1">Έτος</div>
				<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1">Μήνας</div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">Ποσότητα τροφής</div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">Απλή τροφή</div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">Premium τροφή</div>
				<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">Super premium τροφή</div>
			</div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr></div>
			<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
			

		<?php
			$mysqli = new mysqli("localhost", "root", "", "ptsqrstats");
		
			$result = $mysqli->query("SELECT tr_g_id, id_g, etos, minas, posotita, apli, prem, super_prem FROM trofes_gatas ORDER BY tr_g_id ASC");

			if ($result -> num_rows > 0) {
			//output data of each row
				while ($row = $result->fetch_assoc()) {
					echo '<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1">'.$row["tr_g_id"].'</div>'.'<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1">'. $row["id_g"].'</div>'.'<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1">'. $row["etos"].'</div>'.'<div class="col_c col-lg-1 col-md-1 col-sm-1 col-xs-1">'. $row["minas"].'</div>'.'<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'. $row["posotita"].'</div>'.'<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'. $row["apli"].'</div>' .'<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'. $row["prem"]. '</div>'.'<div class="col_c col-lg-2 col-md-2 col-sm-2 col-xs-2">'. $row["super_prem"]. '</div>';
					echo "<br>";
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

			<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<h4>Id: <select name="edit_id">
			<option value="0">Id (επεξεργασία μόνο)</option>
				<?php
				//these variables are used because echo can't output the options correctly
				$var1='<option value="';
				$var2='">';
				$var3='</option>';
					$res_edit = $mysqli->query("SELECT tr_g_id FROM trofes_gatas");

					while ($row_edit = $res_edit->fetch_assoc()) {
						echo $var1.$row_edit["tr_g_id"].$var2.$row_edit["tr_g_id"].$var3;
					}

				?>
			</select>
		</h4>
		</div>
		<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>	
			Απλή: <input type="text" name="text_apli">
		</h4></div>
		<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>
			Premium: <input type="text" name="text_prem">
		</h4></div>
		<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><h4>
			Super Premium: <input type="text" name="text_super_prem">
		</h4></div>
	</div>
	<div class="lines col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
		<div class="col_c col-lg-4 col-md-4 col-sm-4 col-xs-4"><input type="submit" name="edit_var" value="Επεξεργασία"></div>
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

		if (isset($_GET['refresh_table'])) {

			echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';

		}
		elseif (isset($_GET['edit_var'])) {
			$apli = $_GET["text_apli"];
			$prem = $_GET["text_prem"];
			$super_prem = $_GET["text_super_prem"];

			$edit_id = $_GET["edit_id"];

			if ($edit_id != 0) {

				//int final is the value of posotita from trofes_gatas

				$int_check = $mysqli -> query("SELECT posotita, apli, prem, super_prem FROM trofes_gatas WHERE tr_g_id = $edit_id");


					while ($int_row = $int_check->fetch_assoc()) {

						$int_final = $int_row["posotita"];

						$int_apli = $int_row['apli'];
						$int_prem = $int_row['prem'];
						$int_super_prem = $int_row['super_prem'];
					}




				if (is_numeric($apli) && is_numeric($prem) && is_numeric($super_prem)) {

					$sum = $apli + $prem + $super_prem; //the sum of 3 table values

					if ($sum > $int_final) { // if the $sum is more than posotita of trofes skilou then alert the user
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής ξεπερνά την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}
					elseif ($sum < $int_final) { //if the sum is less the user also gets an alert
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής δεν είναι ίδιο με την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}

					else {

						$query_edit = $mysqli -> query("UPDATE trofes_gatas SET Apli = $apli, Prem = $prem, Super_prem = $super_prem WHERE tr_g_id = $edit_id");


						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';
					}


					
				}





				elseif (empty($apli) && (is_numeric($prem) && is_numeric($super_prem))) {

					$sum = $int_apli + $prem + $super_prem;

					if ($sum > $int_final) { // if the $sum is more than posotita of trofes skilou then alert the user
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής ξεπερνά την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}
					elseif ($sum < $int_final) { //if the sum is less the user also gets an alert
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής δεν είναι ίδιο με την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}

					else {

						$query_edit = $mysqli -> query("UPDATE trofes_gatas SET Prem = $prem, Super_prem = $super_prem WHERE tr_g_id = $edit_id");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';
					}

				}






				elseif (empty($prem) && (is_numeric($apli) && is_numeric($super_prem))) {

					$sum = $apli + $int_prem + $super_prem;

					if ($sum > $int_final) { // if the $sum is more than posotita of trofes skilou then alert the user
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής ξεπερνά την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}
					elseif ($sum < $int_final) { //if the sum is less the user also gets an alert
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής δεν είναι ίδιο με την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}

					else {

						$query_edit = $mysqli -> query("UPDATE trofes_gatas SET Apli = $apli, Super_prem = $super_prem WHERE tr_g_id = $edit_id");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';
					}

				}






				elseif (empty($super_prem) && (is_numeric($apli) && is_numeric($prem))) {

					$sum = $apli + $prem + $int_super_prem;

					if ($sum > $int_final) { // if the $sum is more than posotita of trofes skilou then alert the user
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής ξεπερνά την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}
					elseif ($sum < $int_final) { //if the sum is less the user also gets an alert
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής δεν είναι ίδιο με την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}

					else {

						$query_edit = $mysqli -> query("UPDATE trofes_gatas SET Apli = $apli, Prem = $prem WHERE tr_g_id = $edit_id");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';
					}
				}








				elseif (empty($apli) && empty($prem) && is_numeric($super_prem)) {

					$sum = $int_apli + $int_prem + $super_prem;

					if ($sum > $int_final) { // if the $sum is more than posotita of trofes skilou then alert the user
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής ξεπερνά την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}
					elseif ($sum < $int_final) { //if the sum is less the user also gets an alert
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής δεν είναι ίδιο με την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}

					else {


						$query_edit = $mysqli -> query("UPDATE trofes_gatas SET Super_prem = $super_prem WHERE tr_g_id = $edit_id");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';
					}
				}







				elseif (empty($apli) && empty($super_prem) && is_numeric($prem)) {

					$sum = $int_apli + $prem + $int_super_prem;

					if ($sum > $int_final) { // if the $sum is more than posotita of trofes skilou then alert the user
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής ξεπερνά την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}
					elseif ($sum < $int_final) { //if the sum is less the user also gets an alert
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής δεν είναι ίδιο με την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}

					else {

						$query_edit = $mysqli -> query("UPDATE trofes_gatas SET Prem = $prem WHERE tr_g_id = $edit_id");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';
					}
				}







				elseif (empty($prem) && empty($super_prem) && is_numeric($apli)) {

					$sum = $apli + $int_prem + $int_super_prem;

					if ($sum > $int_final) { // if the $sum is more than posotita of trofes skilou then alert the user
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής ξεπερνά την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}
					elseif ($sum < $int_final) { //if the sum is less the user also gets an alert
						echo '<script language="javascript">';
						echo 'alert("Το σύνολο των ποσών της απλής, premium και super premium τροφής δεν είναι ίδιο με την ποσότητα της συνολικής τροφής για την καταχώρηση που επιλάξετε ('.$edit_id.')")';
						echo '</script>';
					}

					else {

						$query_edit = $mysqli -> query("UPDATE trofes_gatas SET Apli = $apli WHERE tr_g_id = $edit_id");

						echo '<script> window.location=" '.$_SERVER['PHP_SELF'].' "; </script>';
					}
				}







				elseif ((empty($apli) && empty($prem) && empty($super_prem)) || (!is_numeric($apli) || !is_numeric($prem) || !is_numeric($super_prem))) {

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
		<a href="skilos.php">Σκύλος</a> -
		<a href="gata.php">Γάτα</a> -
		<a href="poulia.php">Πουλιά</a> -
		<a href="psaria.php">Ψάρια</a> -
		<a href='troktika.php'>Τρωκτικά</a> -
		Τροφές Σκύλου -
		<a href="trofes_gatas">Τροφές Γάτες</a>-->

		<?php
		mysqli_close($mysqli);
		?>

		<hr>

	</body>
</html>