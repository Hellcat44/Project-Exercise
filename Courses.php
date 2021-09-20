<?php include 'main.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title><?=$names['courses'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php   $courses = [
        [
         "title" => "HTML",
         "description" => "HTML расшифровывается как HyperText Markup Language (язык гипертекстовой разметки). Это язык разметки документов во Всемирной паутине (World Wide Web, WWW). HTML — это стандартизированный язык, позволяющий составлять форматированный текст. Браузер интерпретирует его и отображает на экране элементы веб-страниц.",
         "link" => "<a href='AboutHTML.php' target='_self'>Подробнее...</a>"
         
        ],

        [
        "title" => "CSS",
        "description" => "CSS («Cascading Style Sheets» или «Каскадные таблицы стилей») – это язык, предназначенный для преобразования внешнего вида страницы на сайте в удобную для восприятия пользователем форму. Как правило, язык CSS используют для описания интернет-страниц, уже написанных на языках HTML либо XHTML. Кроме этого, CSS нередко применяют в совокупности с такими документами XML, как SVG или XUL.",
        "link" => "<a href='AboutCSS.php' target='_self'>Подробнее...</a>"
        ],
        [
         "title" => "PHP",
         "description" => "PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) - это распространённый язык программирования общего назначения с открытым исходным кодом. PHP специально сконструирован для веб-разработок и его код может внедряться непосредственно в HTML.",
         "link" => "<a href='AboutPHP.php' target='_self'>Подробнее...</a>"
        ],


];?>
    
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
                                                                                    <div class='link'><p>" . $content['link'] . "</p></div>
                                                                                   </div>" ;
                                                                    }





                                                                     ?>
                                                                    
                                                                 
                                                            </div>

                                                            
                                                           </div>  

                                       </div>        
</body>
</html>