<?php $content = "<h1>О нас</h1>
    <h1>
    wooppay | fintech
    </h1>
    <p>
    Wooppay — это технологии и инновации, меняющие традиционные способы предоставления финансовых услуг.
    </p>
    <strong>
        НАША МИССИЯ
    </strong>
    <p> Используя технологии и инновации, расширять возможности людей и бизнеса. </p>
    <strong>
        НАШИ КОНТАКТЫ
    </strong>
    <p>support@wooppay.com</p>
    <p>+7 7212 98 10 90</p>
    <p>Наш адрес:</p>
    <p>10000, Республика Казахстан, город Караганда,</p>
    <p>проспект Нурсултана Назарбаева, д. 15 </p>
    <a href='https://www.facebook.com/wooppay/?fref=ts'>facebook</a>
    <a href='https://twitter.com/wooppay'>twitter</a>
    <a href='https://www.instagram.com/wooppay/'>instagram</a>"; ?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo "About us" ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="menu-border">
            <div class="menu">           
               <strong>Меню</strong>
               <ul> 
                    <li><a href="MainPage.php" target="_self">Главная страница</a></li>
                    <li><a href="Courses.php" target="_self">Курсы</a></li>
                    <li><a href="AboutUs.php" target="_self">О нас</a></li>
                    <li><a href="Prices.php">Цены на курсы</a></li>
                    <li><a href="SignIn.php">Войти</a></li>
                    <li><a href="Registration.php">Регистрация</a></li>
                </ul>
            </div>
</div>
<div class="text">
    <?php echo $content;?>
    
</div>
</div>
</body>
</html>