
<?php $content = "<p>Дорогой студент, мы рады приветствовать тебя в нашей школе программирования WOOPPAY SCHOOL.</p>
     <p>Здесь ты сможешь получить все необходымие навыки и знания для верстки сайтов. В наших стенах работают профессионалы своего дела,которые имеют огромный практический опыт в создании сайтов. Поэтому мы сможете получать исключительно нужную и полезную информацию без 'воды'.</P> 
     <p>Для того, чтобы записаться на курс, вам достаточно написать на почту courses@wooppay.com. В письме укажите ваше ФИО, номер телефона, а также желаемый курс. </p>"; ?>

<?php
include '../Config/main.php';
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $names['main_page'] ?></title>
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
                  <h1>Школа программирования WOOPPAY SCHOOL</h1>
                  <?php echo $content;?>
            </div>
        </div>
</body>
</html>