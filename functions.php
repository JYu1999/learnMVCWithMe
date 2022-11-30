<?php
function dd($value){
echo "<pre>";

    var_dump($value);

    echo "</pre>";

die();
}

function urlIs($value){
    if($value === $_SERVER['REQUEST_URI']){
        return true;
    }
    else return false;
}