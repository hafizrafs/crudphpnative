<?php
	session_start();
	include_once("admin/config.php");
	$result = mysqli_query($mysqli, "SELECT * FROM user_id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="0">
		<tr><td><a href="login/login.php">Login</a></td>
			<td><a href="login/logout.php">Logout</a></td>
		</tr>
	</table>
	<table width="60%" border="1">
		<tr>
			<th width="10%">Name</th><th width="8%">Posisi</th><th width="7%">Tanggal Masuk</th>
			<?php if(isset($_SESSION['status']) == 'login') { ?>
			<th width="5%" colspan="2">Atur Data</th> <?php } ?>
		</tr>
		<?php
			while($user_id = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$user_id['nama']."</td>";
				echo "<td>".$user_id['posisi']."</td>";
				echo "<td>".$user_id['tgl_masuk']."</td>";
				?>
				<?php
					include("admin/user_control.php");
				?>
				<?php
				echo "</tr>";
			}
		?>
		<tr>
			<td colspan="3" align="right"><a href="admin/add_user.php">Add New User</a></td>
		</tr>
	</table>

</body>
</html>
