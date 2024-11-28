<?php
$sql= new mysqli('localhost','root','root1234:','project','3308');
$result = $sql->query("SELECT * FROM `projects`");
$data = $result->fetch_all();
foreach ($data as $tovars) {

  ?>

  <?php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Просмотр проектов</title>
<style>
    th, td {
        padding: 10px; 
    }
    
</style>
</head>
<style>
    th, td {
        padding: 10px; 
    }
    
</style>
<body>
<br> <br> <br> <br> <br>
    <?php
    $id = $_GET['id'];
    $sql= new mysqli('localhost','root','root1234:','project','3308');

    
    if (!$sql) {
        die("Ошибка: " . mysqli_connect_error());
    }

    $result = $sql->query("SELECT * FROM projects WHERE user_id = $id;");
    $data = $result->fetch_all();
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Действия</th>
           
        </tr>
        <?php
        foreach ($data as $tovars) {
        ?>
        <tr>
            <td><?= $tovars[0] ?></td>
            <td><?= $tovars[1] ?></td>
            <td><?= $tovars[2] ?></td>
            
            <td>
                <a style="color: red;" href="delete.php?id=<?=$tovars[0]?>">Удалить</a> |
                <a href="update.php?id=<?=$tovars[0]?>">Изменить</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </br>
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
        input[type="password"],
        textarea,
        input[type="number"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        button[type="submit"] {
            border: 1px solid #ccc;
            background-color: #eee;
            color: black;
            padding: 10px 20px;
            
            border-radius: 3px;
            cursor: pointer;
        }
        
    </style>
    
    <form action="addproj.php" method="post">
    <h1 id="ent">Добавить пользователя</h1>
        <form>
          <input  type="text" name="title" class="form-control" id="title" placeholder="Название" ><br>
          <input type="text" name="descr" class="form-control" id="descr" placeholder="Описание"><br>
          <button class="btn btn-success" id="succ">Добавить</button><br><br>
          <input type="hidden" name="idd" value=<?= $id?>>
        </form>
    </form>
    <br>
    <form action="main.php" method="post">  
        <button type="submit">Назад</button>
    </form>
    <br>
</body>
</html>