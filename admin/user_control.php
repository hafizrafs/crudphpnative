<?php
if(isset($_SESSION['status']) == 'login')
{
?>
    <td>
        <form action="index.php" method="post">
            <input type="hidden" name="hapus_user" value="<?php echo $user_id['id'];?>">
            <input type="submit" name="hapus" value="Hapus User">
        </form>
    </td>
    <td>
        <a href="admin/edit_user.php/?id=<?php echo $user_id['id']?>">Edit User</a>
    </td>
<?php } ?>