<?php
session_start();
session_unregister("tb_forum_user");
echo "<script>window.location.href='index.php';</script>";
?>
