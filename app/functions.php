<?php


function redirect($page = null)
{
    $page = $page ?? $_SERVER['PHP_SELF'];
    header('Location: ' . linkto . $page);
}

function include_template($templateName, $data = [])
{
    $templateFile = PATH_TEMPLATES . "/$templateName.php";
    if (file_exists($templateFile)) {
        extract($data);
        include $templateFile;
    } else {
        print ("Template `$templateName` not found");
    }
}

function flashMessage($flash){
    $msg = $_SESSION[$flash];
    unset($_SESSION[$flash]);
    return $msg;
}