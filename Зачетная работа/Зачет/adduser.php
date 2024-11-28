<?php
$connect= new mysqli('localhost','root','root1234:','project','3308');
if (!$connect) {
    die("Ошибка: " . mysqli_connect_error());
}

$usname = $_POST['usname'];
$password = $_POST['pass'];

    $sql = "INSERT INTO users (username, password) VALUES ('$usname', '$password');";
    if (mysqli_query($connect, $sql)) 
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    else 
    {
        echo "Ошибка: " . mysqli_error($connect);
    }
mysqli_close($connect);
?>