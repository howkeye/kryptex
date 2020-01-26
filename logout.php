<?php
session_start();  ?>

<?php
session_unset(); 

// destroy the session 
session_destroy(); 

echo "<script type='text/javascript'>window.location.href='index.php';</script>";
?>