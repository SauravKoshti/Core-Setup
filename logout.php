<?php
   session_start();
   
   
    if(isset($_SESSION['name'])){ 
          
      unset($_SESSION['name']);
      session_destroy();  
    }
  
    
    
  //  header('Refresh: 2; URL = index.php');
   header('Location:index.php');

?>
