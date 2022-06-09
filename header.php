<?php // Example 27-2: header.php
  session_start();

echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>
    <link rel='stylesheet' href='old_styles.css' type='text/css'>
    <script src='javascript.js'></script>
    <script src='jquery-2.2.4.min.js'></script>
    <script src='jquery.mobile-1.4.5.min.js'></script>

_INIT;

  require_once 'functions.php';

  $userstr = 'Добро пожаловать, юзер';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";
  }
  else $loggedin = FALSE;

echo <<<_MAIN
    <title>Баклажан (Аналог ВК)</title>
  </head>
  <body>
    <div data-role='page'>
      <div data-role='header'>
        <div id='logo' class='center'>
                      <svg viewbox="0 0 100 20">
            <defs>
              <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
                <stop offset="5%" stop-color="#326384"/>
                <stop offset="95%" stop-color="#123752"/>
              </linearGradient>
              <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
                <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
                  <animateTransform
                      attributeName="transform"
                      begin="0s"
                      dur="1.5s"
                      type="translate"
                      from="0,0"
                      to="40,0"
                      repeatCount="indefinite" />
                </path>
              </pattern>
            </defs>
            <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)"  fill-opacity="0.6">БА-ЖАН</text>
            <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.1">БА-АЖАН</text>
          </svg>
        
        </div>
        <div class='username'>$userstr</div>
      </div>
      <div data-role='content'>

_MAIN;

  if ($loggedin)
  {
echo <<<_LOGGEDIN
        <div class='center'>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition="slide" href='members.php?view=$user'>Home</a>
          <a data-role='button' data-inline='true' data-icon='user'
            data-transition="slide" href='members.php'>Members</a>
          <a data-role='button' data-inline='true' data-icon='heart'
            data-transition="slide" href='friends.php'>Friends</a><br>
          <a data-role='button' data-inline='true' data-icon='mail'
            data-transition="slide" href='messages.php'>Messages</a>
          <a data-role='button' data-inline='true' data-icon='edit'
            data-transition="slide" href='profile.php'>Edit Profile</a>
          <a data-role='button' data-inline='true' data-icon='action'
            data-transition="slide" href='logout.php'>Log out</a>
        </div>
        
_LOGGEDIN;
  }
  else
  {
echo <<<_GUEST
        <div class='center'>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition='slide' href='index.php'>Домашка</a>
          <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>Зарегаца</a>
          <a data-role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Залететь к типам</a>
        </div>
        <p class='info'>(Необходимо зарегестрироваться для использования соц.сети)</p>
        
_GUEST;
  }
?>
