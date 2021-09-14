<!DOCTYPE html>
<html>
<head>
    <title><?php echo "Courses" ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php   $courses = [
        [
         "title" => "HTML",
         "description" => "HTML расшифровывается как HyperText Markup Language (язык гипертекстовой разметки). Это язык разметки документов во Всемирной паутине (World Wide Web, WWW). HTML — это стандартизированный язык, позволяющий составлять форматированный текст. Браузер интерпретирует его и отображает на экране элементы веб-страниц.",
         
        ],

        [
        "title" => "CSS",
        "description" => "CSS («Cascading Style Sheets» или «Каскадные таблицы стилей») – это язык, предназначенный для преобразования внешнего вида страницы на сайте в удобную для восприятия пользователем форму. Как правило, язык CSS используют для описания интернет-страниц, уже написанных на языках HTML либо XHTML. Кроме этого, CSS нередко применяют в совокупности с такими документами XML, как SVG или XUL."
        ],
        [
         "title" => "PHP",
         "description" => "PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) - это распространённый язык программирования общего назначения с открытым исходным кодом. PHP специально сконструирован для веб-разработок и его код может внедряться непосредственно в HTML."
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
                                                                    <div class="course">
                                                                           <strong><?= $courses[0]["title"] ?></strong>
                                                                           <div class="cr1"><p><?=$courses[0][description]?></p></div> 
                                                                           
                                                                           <div class="link"><a href="AboutHTML.php">Подробнее...</a></div>
                                                                    </div>
                                                                    
                                                                    <div class="course">
                                                                           <strong><?= $courses[1]["title"] ?></strong>
                                                                            <div class="cr1"><p><?= $courses[1]["description"] ?></p></div>
                                                                    
                                                                           
                                                                           <div class="link"><a href="AboutCSS.php">Подробнее...</a></div>
                                                                    </div>
    
                                                                    <div class="course">
                                                                           <strong><?= $courses[2]["title"]?></strong>
                                                                           <div class="cr1"> 
                                                                              <p><?= $courses[2]["description"]?></p>
                                                                           </div> 
                                                                           <div class="link"><a href="AboutPHP.php">Подробнее...</a></div>
                                                                    </div>
                                                            </div>

                                                            
                                                           </div>  

                                       </div>        
</body>
</html>