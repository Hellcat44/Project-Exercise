<?php 
function view(string $name) : string
{
$name1 = $name . "View.php";
include "../views/$name1";
}

 ?>

