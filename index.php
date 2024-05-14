<?php

if(file_exists('../app/init.php')){
    require_once ("../app/init.php");
} else {
    require_once ("app/init.php");
}

$url = $_GET['URL'] ?? 'home';
$url = filter_var($url, FILTER_SANITIZE_URL);
$uri = explode('/', rtrim($url, '/'));

$page = empty($uri[0]) ? 'home' : $uri[0];
$subpage = $uri[1] ?? 'index';

$page_file = PATH_PAGES . "/$page.php";
if(!file_exists($page_file)){
    $page_file = PATH_PAGES . "/$page/$subpage.php";
    if(!file_exists($page_file)){
        $page_file = PATH_PAGES . "/404.php";
    }
    $params = count($uri) > 1 ? array_slice($uri, 1) : [];
} else {
    $params = count($uri) > 2 ? array_slice($uri, 2) : [];
}

// resolve the queries and return params
unset($_GET['PAGES']);
$params = array_merge($params, $_GET);

App::runpage($page_file, $params);