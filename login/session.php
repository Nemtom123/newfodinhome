<?php
if(isset($_SESSION["user"]))
{
    if(time()-$_SESSION["login_time_stamp"] >600)
    {
        session_unset();
        session_destroy();
        header("Location:index.php");
    }
}
else
{
   // header("Location:index.php");
}
?>


