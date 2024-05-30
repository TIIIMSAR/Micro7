<?php

function site_url($route){
    return $_ENV['HOST'] . $route;
}

function asset_url($route){
    return site_url("assets/" . $route);
}

function view($path,$data = []){   # error.404
    extract($data);
    $path = str_replace('.','/',$path);
    $view_full_path = BASEPATH . "views/$path.php";
    include_once $view_full_path;
}



function strContains($str,$needle,$case_sensitive = 0)
{
    if($case_sensitive)
        $pos = strpos($str,$needle);
    else
        $pos = stripos($str,$needle);
    
    return ($pos !== false) ? true : false;
}

function nice_dump($var)
{
    echo "<pre style='display: block; text-align: left; direction: ltr; background-color: #fff; border: 1px solid #b75520; border-left-width: 7px; border-radius: 5px; margin: 10px; padding: 10px 10px 0 10px !important; font-size: 17px !important;'>";
    var_dump($var);
    echo "</pre>";
}
function nice_dd($var)
{
    nice_dump($var);
    die();
}


