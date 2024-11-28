<?php

$connect= new mysqli('localhost','root','root1234:','project','3308');


if (!$connect) {
    die("Ошибка: " . mysqli_connect_error());
}


$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];




$id = mysqli_real_escape_string($connect, $id);
$title = mysqli_real_escape_string($connect, $title);
$description = mysqli_real_escape_string($connect, $description);



    $sql = "UPDATE projects SET title = '$title', descr = '$description' WHERE id = $id;";
    if (mysqli_query($connect, $sql)) 
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    else 
    {
        echo "Ошибка при обновлении: " . mysqli_error($connect);
    }




mysqli_close($connect);
?>
