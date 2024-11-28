<?php

$connect = new mysqli('localhost','root','root1234:','project','3308');
if (!$connect) {
    die("Ошибка: " . mysqli_connect_error());
}

$id = $_GET['id'];



$sql = "DELETE FROM projects WHERE id = $id;";
if (mysqli_query($connect, $sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    exit; 
} else {
    echo "Ошибка при удалении: " . mysqli_error($connect);
}

mysqli_close($connect);
?>