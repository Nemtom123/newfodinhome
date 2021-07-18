<?php  
 //delete.php  

 print_r($_GET['delete']);
 if(!empty($_GET["delete"]))  
 {  
      if(unlink($_GET["delete"]))  
      {  
        ob_start();
        header("Location: keptorlese.php?name=sikerult");
        ob_end_flush();
      }  
 }  
 ?>  
