<?php
if (!session_id()) session_start();
if (!$_SESSION['logon']){
    header("Location:http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/");
    die();
}
else{ 
session_destroy();
    header("Location:http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/");
}
?>