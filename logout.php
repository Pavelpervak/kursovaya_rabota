<?php // Example 27-12: logout.php
  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    echo "<br><div class='center'>Вы хотите покинуть соц. сеть.
         <a data-transition='slide' href='index.php'>нажми меня</a>
         что-бы обновить страничку.</div>";
  }
  else echo "<div class='center'>Вы не можете выйти, так как еще не прошла ваша регистрация.</div>";
?>
    </div>
  </body>
</html>
