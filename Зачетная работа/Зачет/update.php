<?php
$connect= new mysqli('localhost','root','root1234:','project','3308');

if (!$connect) {
    die("Ошибка: " . mysqli_connect_error());
}

$id = $_GET['id'];

$id = mysqli_real_escape_string($connect, $id);

$sql = "SELECT * FROM projects WHERE id = '$id'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $description = $row['descr'];
} else {
    echo "Проект не найден.";
    exit;
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение проекта</title>
</head>
<style>
         html {
            --s: 82px; 
            --c1: #b2b2b2;
            --c2: #ffffff;
            --c3: #d9d9d9;
            --_g: var(--c3) 0 120deg,#0000 0;
            background:
            conic-gradient(from -60deg at 50% calc(100%/3),var(--_g)),
            conic-gradient(from 120deg at 50% calc(200%/3),var(--_g)),
            conic-gradient(from  60deg at calc(200%/3),var(--c3) 60deg,var(--c2) 0 120deg,#0000 0),
            conic-gradient(from 180deg at calc(100%/3),var(--c1) 60deg,var(--_g)),
            linear-gradient(90deg,var(--c1)   calc(100%/6),var(--c2) 0 50%,
                          var(--c1) 0 calc(500%/6),var(--c2) 0);
        background-size: calc(1.732*var(--s)) var(--s);
        }
        body {
            position:relative;
            margin-top: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vh;
            margin: 0;
            left:50vh;
            background: #eee;
        }

        form {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        input[type="number"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        button[type="submit"] {
            background-color: #eee;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
    </style>
<body>
    <h2>Изменение проекта</h2>
    <form action="save_update.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <label for="title">Название:</label>
        <input type="text" id="title" name="title" value="<?php echo $title; ?>"><br><br>

        <label for="description">Описание:</label>
        <textarea id="description" name="description"><?php echo $description; ?></textarea><br><br>

        <button type="submit">Сохранить изменения</button>
        
    </form>
    </br>
    <form action="main.php" method="post">
        

        <button type="submit">На главную</button>
        
    </form>
</body>
</html>