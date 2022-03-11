<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

include "connect.php";
if (isset($_POST['login'])) 
{
    $email = strip_tags($_POST['email']);
    $email = addslashes($_POST['email']);
    $pass = strip_tags($_POST['pass']);
    $pass = addslashes($_POST['pass']);
    //$pass = md5($pass);

    $sql = "SELECT email, pass FROM tblogin WHERE email='$email' AND pass = '$pass' ";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "Email/Password khong chinh xac. Kiem tra lai. <a href='javascript: history.go(-1)'>Return</a>";
        exit;
    } else {
        $_SESSION['email'] = $email;
        header('Location: listsv.php');
    }
}
