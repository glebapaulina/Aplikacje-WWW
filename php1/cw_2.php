<html>
<head>
<title>PHP - cwiczenie 2</title>
</head>
<body>
Witaj! <p>
Otrzymano następujące dane:<br>
<?php
session_start();
?>

<?php
echo "Nazwa: <b>". $_POST['nazwa']."</b> <br>";
echo "Hasło: <b>". $_POST['haslo']."</b> <br>";
if (isset($_POST['nazwa']) && ($_POST['haslo']<>'') &&
($_POST['nazwa']==$_POST['haslo']))
{
echo 'Logowanie poprawne <br>';
echo '<a href="cw_4.php">Dalej</a> <br>';
$_SESSION['zalogowany'] = "TAK";
$_SESSION['zalogowany_uzytkownik'] = $_POST["nazwa"];
}
else
{
echo 'Logowanie niepoprawne<br>';
echo '<a href="cw_2.html">Sprobuj jeszcze raz</a> <br>';
unset($_SESSION['zalogowany']);
unset($_SESSION['zalogowany_uzytkownik']);
}
?>

</body>
</html>