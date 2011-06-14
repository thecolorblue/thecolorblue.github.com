<html>
<?php
echo 'cookie test';
setcookie ('User_ISN','1');
setcookie ('date',date('Y-m-d'));
setcookie ('city','Stow');
setcookie ('state','OH');
header('Location:CL-front.php');
?>
</html>