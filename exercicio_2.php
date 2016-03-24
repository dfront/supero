<?php
session_start();   
$url = 'http://www.google.com';
$_SESSION['loggedin'] = false;
$_COOKIE['Loggedin'] = false;

if(getSessionVar('loggedin') || getCookieVar('Loggedin')){  
    print('Location: '.$url);   
}

function getSessionVar($var){
    if(isset($_SESSION[$var])){
	return $_SESSION[$var];
    }
    return false;
}

function getCookieVar($var){
    if(isset($_COOKIE[$var])){
	return $_COOKIE[$var];
    }
    return false;
}




