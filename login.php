<?php
header('Content-Type: text/html; charset=utf-8');

$users = [
    'admin' => 'password123',
    'root'  => 'supersecretpassword'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        setcookie('sessionid', base64_encode($username), time() + 3600, "/");
        header("Location: member.php");
        exit();
    } else {
        echo "<h1>登入失敗！</h1><p>帳號或密碼錯誤，請再試一次。</p>";
    }
}

?>
