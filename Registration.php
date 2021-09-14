<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo "Registration" ?></title>
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
                  <h1>Регистрация</h1>
                 <div class="rg1"> 
                  <input type="text" name="UserName" placeholder="Имя пользователя">
                 </div> 
                 <div class="rg1">
                    <input type="text" name="Email" placeholder="Почтовый адрес">
                 </div>
                 <div class="rg1">
                     <p>Пол</p>
                     <input type="radio" name="group1">Мужской<Br>
                     <input type="radio" name="group1">Женский<Br>
                </div>
                <div class="rg1">
                     
                     <select size="1" name="country">
                       <option disabled>Выберите страну</option>
                       <option label="Казахстан"></option>
                       <option label="Россия"></option>
                       <option label="Украина"></option>
                       <option label="Беларусь"></option>
                     </select>
                </div>   
                <div class="rg1">
                     <select size="1">
                     <option disabled>Выберите город</option>
                     <option label="Астана"></option>
                     <option label="Москва"></option>
                     <option label="Киев"></option>
                     <option label="Минск"></option>
                     </select>
                </div>  
                <div class="rg1">
                    <p>Пароль</p>
                    <input type="password" name="Password">
                </div> 
                <div class="rg1">
                    <p>Повторите пароль</p>
                    <input type="password" name="Password">
                </div>   
                <div class="rg1">
                    <input type="checkbox">Вы согласны с правилами площадки?<Br>
                </div>    
                <div class="rg1">
                <button>Зарегистрироваться</button>
                </div>     
            
            </div>

        </div>
</body>
</html>