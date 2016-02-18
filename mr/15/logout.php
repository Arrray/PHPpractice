<?php
session_start();
session_unregister('unc');
unset($_SESSION['recuserinfo']);
unset($_SESSION['idStr']);
unset($_SESSION['numStr']);
unset($_SESSION['browserIDs']);
header('location:index.html');