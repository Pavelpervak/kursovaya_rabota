<?php // Example 27-4: index.php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Добро пожаловать,";

  if ($loggedin) echo " $user, you are logged in";
  else           echo ' Тут или в систему входи, или регестрируйся или я начну кибератаку.';

  echo <<<_END
      </div><br>
    </div>
    <div class="footer">

    </div>
  </body>
</html>
_END;
?>
