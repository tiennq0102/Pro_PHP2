<?php
namespace App\Controllers;
class BaseController{
    public function dd()
    {
        echo '<pre>';
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        echo '</pre>';
        die;
    }
}

?>