<?php 
$url = $_SERVER['REQUEST_URI'];
$routes = [ '/main' => 'controllers/MainPageController.php', '/about' => 'controllers/AboutUsController.php', '/courses' => 'controllers/CoursesController.php', '/html' => 'controllers/AboutHTMLController.php', '/css' => 'controllers/AboutCSSController.php', '/php' => 'controllers/AboutPHPController.php', '/price' => 'controllers/PricesController.php','/reg' => 'controllers/RegistrationController.php','/sign' => 'controllers/SignInController.php'];

if (array_key_exists($url,$routes)) {
    $endpoint = $routes[$url];
    require $endpoint;
} else {
    echo "Страница не найдена";
}


 ?>


 














































































