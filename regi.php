<?php
    $username = $_GET['username']; #admin
    $password = $_GET['password']; #test
    
    $fileContent = "Username: " . $username . "\n" . "Password: " . $password;

    $filename = "user/" . $username . ".txt";
    $file = fopen($filename, "w");
    fwrite($file, $username);
    fclose($file);
    
    $filename = "user/password/" . $username . ".txt";
    $file = fopen($filename, "w");
    fwrite($file, md5($password));
    fclose($file);
    echo "회원가입이 완료되었습니다.";


?>
