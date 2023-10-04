<?php
    $id = $_GET['username'];
    $password = md5($_GET['password']);
    $ip = $_SERVER['REMOTE_ADDR'];
    $validId = trim(file_get_contents('user/' . $id . '.txt'));
    $validPassword = trim(file_get_contents('user/password/' . $id . '.txt'));
    if ($id == $validId && $password == $validPassword) 
    {
        echo "로그인 성공";
    }
    else 
    {
        $log = fopen("user/_log.txt", "a");
        fwrite($log, "IP: " . $ip . ", 입력한 ID: " . $id . ", 입력한 비밀번호: " . $password . "\n");
        fclose($log);

        echo "로그인 실패";
    }
?>
