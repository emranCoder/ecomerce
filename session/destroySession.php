<?php
if($_GET['true']=='tt')
{
    session_start();
    session_unset();
    session_destroy();
    
}
header('location: ../index.php');

?>