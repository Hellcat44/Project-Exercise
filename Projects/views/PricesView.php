<?php
include 'Config/main.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?=$names['price'] ?></title>
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
                 <h1>Цены</h1>
                 <div class="table"> 
                  <table border="1">
            <tr>
                <td colspan="2">Цены</td>
            </tr>
            <tr>
                <td>HTML</td>
                <td rowspan = "2">30 000тг</td>
            </tr>
            <tr>
                <td>CSS</td>
            </tr>
            <tr>
                <td>PHP</td>
                <td>50 000 тг</td>
            </tr>
        </table>
            </div>
        </div>
    </div>
</body>
</html>