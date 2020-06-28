<?php
$database_host = 'localhost';
$database_name = 'db_crud';
$database_username = 'root';
$database_password = '';

$mysqli = mysqli_connect($database_host,$database_username,$database_password,$database_name);


if(isset($_POST['tambah_user']) == 'tambah_user')
{
    $tambah = tambah_data_user_id($_POST['ui_id'],$_POST['ui_nama'],$_POST['ui_posisi'],$_POST['ui_tgl_masuk']);
}

function tambah_data_user_id($id,$nama,$posisi,$tgl_masuk)
{
    global $mysqli;
    mysqli_query($mysqli,"insert into user_id values ('$id','$nama','$posisi','$tgl_masuk')");
}

if(isset($_POST['hapus_user']))
{
    hapus_data($_POST['hapus_user']);
}

function hapus_data($id)
{
    global $mysqli;
    mysqli_query($mysqli,"delete from user_id where id='$id'");

    header("location:index.php");
}
?>