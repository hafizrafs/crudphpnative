<?php
    include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <table>
            <tr>
                <td>ID User</td>
                <td>:</td>
                <td><input type="text" name="ui_id"></td>
                <input type="hidden" name="tambah_user">
            </tr>
            <tr>
                <td>Nama User</td>
                <td>:</td>
                <td><input type="text" name="ui_nama"></td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td>:</td>
                <td><input type="text" name="ui_posisi"></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td><input type="text" name="ui_tgl_masuk"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" value="Simpan Data"></td>
            </tr>
        </table>
    </form>

</body>
</html>