<?php
include 'Config/main.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?=$names['sign_in'] ?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
      <div class="container">  
          <div class="banner">
          </div> 
       <div class="frame"> 
        <div class="menu-border">
            <div class="menu">           
               <strong>Меню</strong>
               <ul> 
                    <li><a href="main" target="_self">Главная страница</a></li>
                    <li><a href="courses" target="_self">Курсы</a></li>
                    <li><a href="about" target="_self">О нас</a></li>
                    <li><a href="price">Цены на курсы</a></li>
                    <li><a href="sign">Войти</a></li>
                    <li><a href="reg">Регистрация</a></li>
                </ul>
            </div>
        </div>
            <div class="text">
                 <div class="window">
                     <strong>Войти</strong>
                     <div class="rg1">
                        <input type="text" placeholder="Имя пользователя">
                     </div>   
                     <div class="rg1">
                        <input type="password" placeholder="Пароль" >    
                     </div>
                     <div class="rg1">
                         <input type="checkbox">Запомнить меня<Br>
                     </div>
                     <div class="rg1">
                         <button>Войти</button>  
                     </div>
                 </div> 
            </div>
        </div>  
        </div>  
</body>
</html>