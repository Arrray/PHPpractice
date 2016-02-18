<?php
session_start();
include("check_mail.php");
session_destroy();
echo "<script>window.location.href='mail.php';</script>";
?>