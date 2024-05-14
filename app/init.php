<?php

// include files
require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

// session and login
session_start();
require_once __DIR__ . '/page_access_control.php';

// Main App
require_once __DIR__ . '/App.php';