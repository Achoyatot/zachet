<?php
$connect= new mysqli('localhost','root','root1234:','project','3308');
if (!$connect) {
    die("Ошибка: " . mysqli_connect_error());
}

$title = $_POST['title'];
$descr = $_POST['descr'];
$idd = $_POST['idd'];

    $sql = "INSERT INTO projects (title, descr, user_id) VALUES ('$title', '$descr', $idd);";
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