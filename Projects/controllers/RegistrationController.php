<?php
require "services/ViewService.php";
$content = new ViewService();

echo $content->view("Registration");

?>