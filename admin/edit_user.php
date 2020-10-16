<?php
    include_once("config.php");
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM user_id WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php while($user_id = mysqli_fetch_array($result)){?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>ID User</td>
                    <td>:</td>
                    <td><input type="text" name="ui_id" value="<?php echo $user_id['id']; ?>"></td>
                    <input type="hidden" name="edit_user">
                </tr>
                <tr>
                    <td>Nama User</td>
                    <td>:</td>
                    <td><input type="text" name="ui_nama" value="<?php echo $user_id['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Posisi</td>
                    <td>:</td>
                    <td><input type="text" name="ui_posisi" value="<?php echo $user_id['posisi']; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td><input type="text" name="ui_tgl_masuk" value="<?php echo $user_id['tgl_masuk']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" name="submit" value="Edit Data"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
    
</body>
</html>