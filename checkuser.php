<?php // Example 27-6: checkuser.php
  require_once 'functions.php';

  if (isset($_POST['user']))
  {
    $user   = sanitizeString($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");

    if ($result->num_rows)
      echo  "<span class='taken'>&nbsp;&#x2718; " .
            "Пользователь '$user' явился</span>";
    else
      echo "<span class='available'>&nbsp;&#x2714; " .
           "Пользователь '$user' меется в наличии.</span>";
  }
?>
