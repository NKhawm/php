<?php
session_start();
session_unset();
session_destroy();
echo "Please log in again.";
echo "<script>location.href='session_login.php'</script>";
?>