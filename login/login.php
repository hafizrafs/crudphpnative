<?php
    session_start();
    $_SESSION['status'] = "login";

    header("location:../");
?>