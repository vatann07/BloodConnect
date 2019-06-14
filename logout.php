<?php
session_start();
session_destroy();
echo 'You have been logged out. Redirecting to Home Page!';
header('refresh:2 URL=bloodconnect.html');  

exit;  
?>
