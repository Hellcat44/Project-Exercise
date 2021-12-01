<?php 
class ViewService
{
    
    public function view(string $name): string
    {
        $name1 = $name . "View.php";
        return include "views/$name1";
    }
}

 ?>
