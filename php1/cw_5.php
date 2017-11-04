<?php
session_start();
unset($_SESSION['zalogowany']);
unset($_SESSION['zalogowany_uzytkownik']);
session_destroy();
?>
<html>
<head>
<meta charset="UTF-8"> 
<title>PHP - cwiczenie 5</title>
</head>
<body>
Wylogowano z serwisu.<br>
<a href="cw_2.html">Zaloguj ponownie</a> <br>
</body></html>