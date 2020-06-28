<?php
	include_once("config.php");
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

	<table width="60%" border="1">
		<tr>
			<th width="10%">Name</th><th width="8%">Posisi</th><th width="7%">Tanggal Masuk</th><th width="4%">Atur Data</th>
		</tr>
		<?php
			while($user_id = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$user_id['nama']."</td>";
				echo "<td>".$user_id['posisi']."</td>";
				echo "<td>".$user_id['tgl_masuk']."</td>";
				?>
				<td>
					<form action="index.php" method="post">
						<input type="hidden" name="hapus_user" value="<?php echo $user_id['id'];?>">
						<input type="submit" name="hapus" value="Hapus User">
					</form>
				</td>
				<?php
				echo "</tr>";
			}
		?>
		<tr>
			<td colspan="3" align="right"><a href="add_user.php">Add New User</a></td>
		</tr>
	</table>

</body>
</html>
