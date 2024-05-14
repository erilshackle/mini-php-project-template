<?php


class App
{

    public static function runpage($page, $params = [])
    {

        // render the page, from header to footer
        ob_start();
        extract($params);


        if (file_exists($page)) {
            include_once $page;
        } else {
            echo "Page not found";
        }
        ob_end_flush();
    }

    private static function page($page)
    {
        return PATH_PAGES . "/$page.php";
    }

    public static function Header($data = [])
    {
        $header = PATH_LAYOUTS . "/header.php";
        if (file_exists($header)) {
            extract($data);
            include_once $header;
        }
    }

    public static function Footer($data = [])
    {
        $header = PATH_LAYOUTS . "/footer.php";
        if (file_exists($header)) {
            extract($data);
            include_once $header;
        }
    }

}