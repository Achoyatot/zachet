<?php
$IDD = 1;
$login=$_POST['login'];
$pass=$_POST['pass'];
$sql= new mysqli('localhost','root','root1234:','project','3308');
if ($sql->connect_error) 
{ 
    die("Connection failed: " . $sql->connect_error); 
} 
   
$stmt = $sql->prepare("SELECT * FROM users WHERE username = '$login' AND password = '$pass';");  
$stmt->execute();  
$result = $stmt->get_result();  
$data = $result->fetch_all();
if(empty($data))
{
echo "Введен неверный логин или пароль";
}
else
{
    foreach($data as $ver)
    { 
        echo $pass;
        $sql->close();
        header('Location: main.php'); 
    }
    

}