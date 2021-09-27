<?php
include '../Config/main.php';
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
        <div class="menu-border">
            <div class="menu">           
               <strong>Меню</strong>
               <ul> 
                    <li><a href="MainPageController.php" target="_self">Главная страница</a></li>
                    <li><a href="CoursesController.php" target="_self">Курсы</a></li>
                    <li><a href="AboutUsController.php" target="_self">О нас</a></li>
                    <li><a href="PricesController.php">Цены на курсы</a></li>
                    <li><a href="SignInController.php">Войти</a></li>
                    <li><a href="RegistrationController.php">Регистрация</a></li>
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
</body>
</html>