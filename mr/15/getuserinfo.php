<?php
require_once 'header.php';
if (isset($_POST["usernc"]) && $_POST["usernc"] != "") {
    if (! $adminDB->executeSQL("select id, usernc from tb_user where usernc='" . $_POST["usernc"] . "'", $connID)) {
        $time = date("Y-m-d H:i:s");
        if ($adminDB->executeSQL("insert into tb_user(usernc,truename,pwd,email,sex,tel,qq,address,logintimes,regtime,lastlogintime,ip,yb,usertype,answer,question,truepwd,photo,score) values('" . $_POST["usernc"] . "','" . $_POST["truename"] . "','" . md5(trim($_POST["userpwd1"])) . "','" . $_POST["email"] . "','" . $_POST["sex"] . "','" . $_POST["tel"] . "','" . $_POST["qq"] . "','" . $_POST["address"] . "','0','$time','$time','" . $_SERVER['REMOTE_ADDR'] . "','" . $_POST["yb"] . "','0','" . $_POST["answer"] . "','" . $_POST["question"] . "','" . trim($_POST["userpwd1"]) . "','" . "img/face/" . $_POST["photo"] . "','30')", $connID)) {
            if (isset($_SESSION["unc"]) && $_SESSION["unc"] != "") {
                unset($_SESSION["unc"]);
            }
            session_register("unc");
            $_SESSION["unc"] = trim($_POST["usernc"]);
            if (isset($_SESSION['toUrl'])) {
                echo "<script>window.location.href='" . $util->baseUrl() . "/" . $_SESSION['toUrl'] . "';</script>";
            } else {
                echo "<script>window.location.href='" . $util->baseUrl() . "/regsuccess.html';</script>";
            }
        } else {
            echo "<script>alert('注册失败，请重试！')</script>";
        }
    } else {
        echo "<script>alert('该昵称已经被他人注册！')</script>";
    }
}
$smarty->display('getuserinfo.phtml');
require_once 'footer.php';