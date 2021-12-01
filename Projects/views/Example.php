<!DOCTYPE html>


<?php
function hello($name) : string
{
return $name . ', добро пожаловать на сайт';
}
$message = hello("Василий");
echo $message;
?>


