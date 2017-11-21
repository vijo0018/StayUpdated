<?php
   session_start();
   //Avslutar en session och om direkterar en användare till loggin sidan.
   if(session_destroy()) {
      header("Location: loggin.php");
   }
?>