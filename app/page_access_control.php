<?php

/**
 * HAS FUNCTIONS TO CHECK FOR LOGIN AND PERMISSION
 */

const session_variable_to_store_user_login_information = 'UserLogin';
const session_variable_to_store_user_role_login_type = 'UserRole';

function RequireLogin()
{

    if (isset($_SESSION[session_variable_to_store_user_login_information])) {
        // user is logged in
        return true;
    }
    // user is not logged in
    redirect('login');
    exit;
}

function RequirePrivilleges($userRole = 'admin')
{

    if (isset($_SESSION[session_variable_to_store_user_role_login_type])) {
        if (is_array($userRole)) {
            if (in_array($_SESSION[session_variable_to_store_user_role_login_type], $userRole)) {
                return true;
            }
        } else
            if ($_SESSION[session_variable_to_store_user_role_login_type] != $userRole) {
                return true;
            }
    }
    // privileges / role not validated
    redirect('admin/login');
    exit;
}