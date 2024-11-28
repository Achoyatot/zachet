<!DOCTYPE html>
<html lang="ru">
<head>
  <title>База данных проектов студентов</title>
  <style>
    html {
  --s: 82px; /* control the size */
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
#col
{
	position:absolute;
  background: #eee;
  border-radius: 6px;
  height: 550px;  
	top:50px;
	left:500px;
}
#ent{
    position: relative;
    left: 30px;
    font-family: Georgia, "Times New Roman";
    font-size: 4em;
    top: 130px;
    width: 500px;
}
#login{
    font-family: Georgia, "Times New Roman";
    font-size: 1em;
    position: relative;
	  top:130px;
	  left:130px;
    
    height: 25px;
    width: 210px
}
#pass{
    font-family: Georgia, "Times New Roman";
    font-size: 1em;
    position: relative;
	  top:150px;
	  left:130px;
    bottom: 0px;
    height: 25px;
    width: 210px
}
#succ{
    font-family: Georgia, "Times New Roman";
    font-size: 1.5em;
    position: relative;
	  top:200px;
	  left:112px;
    bottom: 0px;
    height: 45px;
    width: 250px
}
#img{
  position: absolute;
  height: 100px;
  width: 100px;
  left: 700px;
  top: 100px;
}
  </style>
</head>
<body>

  <div class="container mt-4" id="col">
   
        <h1 id="ent">Вход на сайт</h1>
        <form action="auth.php" method="post">
          <input  type="text" name="login" class="form-control" id="login" placeholder="Логин" ><br>
          <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
          <button class="btn btn-success" id="succ">Авторизоваться</button><br><br>
        </form>
  </div>
  <img src="3d-cube-icon-19.png" id="img">
</body>
</html>
