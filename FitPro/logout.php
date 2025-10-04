<?php
session_start();
session_unset();   // sab session variables clear
session_destroy(); // pura session end

// Home page pe redirect
header("Location: home.php");
exit;
?>
