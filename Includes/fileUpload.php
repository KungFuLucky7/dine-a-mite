<?php

// This is for uploading files to the server
$_SESSION['KCFINDER'] = array();
$_SESSION['KCFINDER']['disabled'] = false;
if (!is_dir($_SERVER['DOCUMENT_ROOT'] . '/dine-a-mite/kcfinder/upload/' . $_SESSION['user_id'] . '/')) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . '/dine-a-mite/kcfinder/upload/' . $_SESSION['user_id'] . '/');
}
$_SESSION['KCFINDER']['uploadDir'] = $_SERVER['DOCUMENT_ROOT'] . '/dine-a-mite/kcfinder/upload/' . $_SESSION['user_id'] . '/';
$_SESSION['KCFINDER']['uploadURL'] = '/dine-a-mite/kcfinder/upload/' . $_SESSION['user_id'] . '/';

/*
  if (!is_dir('/home/twong/public_html/dine-a-mite/kcfinder/upload/' . $_SESSION['user_id'] . '/')) {
  mkdir('/home/twong/public_html/dine-a-mite/kcfinder/upload/' . $_SESSION['user_id'] . '/');
  }
  $_SESSION['KCFINDER']['uploadDir'] = '/home/twong/public_html/dine-a-mite/kcfinder/upload/' . $_SESSION['user_id'] . '/';
  $_SESSION['KCFINDER']['uploadURL'] = 'http://sfsuswe.com/~twong/dine-a-mite/kcfinder/upload/' . $_SESSION['user_id'] . '/'; */
?>
