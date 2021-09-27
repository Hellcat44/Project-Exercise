<?php
include '../Config/main.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title><?=$names['courses'] ?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php   $courses = [
        [
         "title" => "HTML",
         "description" => "HTML расшифровывается как HyperText Markup Language (язык гипертекстовой разметки). Это язык разметки документов во Всемирной паутине (World Wide Web, WWW). HTML — это стандартизированный язык, позволяющий составлять форматированный текст. Браузер интерпретирует его и отображает на экране элементы веб-страниц.",
         "link" => "../controllers/AboutHTMLController.php"
         
        ],

        [
        "title" => "CSS",
        "description" => "CSS («Cascading Style Sheets» или «Каскадные таблицы стилей») – это язык, предназначенный для преобразования внешнего вида страницы на сайте в удобную для восприятия пользователем форму. Как правило, язык CSS используют для описания интернет-страниц, уже написанных на языках HTML либо XHTML. Кроме этого, CSS нередко применяют в совокупности с такими документами XML, как SVG или XUL.",
        "link" => "../controllers/AboutCSSController.php"
        ],
        [
         "title" => "PHP",
         "description" => "PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) - это распространённый язык программирования общего назначения с открытым исходным кодом. PHP специально сконструирован для веб-разработок и его код может внедряться непосредственно в HTML.",
         "link" => "../controllers/AboutPHPController.php"
        ],


];?>
    
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
                                                            
                                                           <div class="frame"> 
                                                            <div class="search">
                                                               <input type="text" placeholder="Найти..." >
                                                               <button>Поиск</button>
                                                             </div>
                                                            <div class="cborder">
                                                                    <h1>Каталог курсов</h1>
                                                                    <?php foreach ($courses as $content) {
                                                                                   echo "<div class='course'>
                                                                                   <div class='cr1'>
                                                                                                 <strong>" . $content['title'] . "</strong>
                                                                                                 <p>" . $content['description'] . "</p>
                                                                                    </div>             
                                                                                    <div class='link'><p><a href='". $content['link'] ."'>Подробнее...</a></p></div>
                                                                                   </div>" ;
                                                                    }





                                                                     ?>
                                                                    
                                                                 
                                                            </div>

                                                            
                                                           </div>  

                                       </div>        
</body>
</html>