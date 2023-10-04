<?php
    session_start();

    if (!$_SESSION['loggedin']) { 

    $username = $_GET['username'];
    $password = $_GET['password'];

    $validUsername = "admin";
    $validPassword = "password";
    if ($username == $validUsername && $password == $validPassword) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    print("로그인 성공!");
    exit();
    } else {
    print("로그인 실패");
    }
    }

    else
    {
    print("이미 로그인 되어 있습니다");
    }
?>