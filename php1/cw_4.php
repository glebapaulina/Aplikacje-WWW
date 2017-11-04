<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
	$host = $_SERVER['HTTP_HOST'];
	$path = dirname($_SERVER['PHP_SELF']);
	header("Location: http://$host$path/cw_2.html");
	exit;
}
?>

<html>
<head><meta charset="UTF-8"> </head>
<body>
	<?php
	
	echo "Witaj: <b>".$_SESSION["zalogowany_uzytkownik"]."<b> <br>"; /*wywo³anie zmiennej sesyjnej
	$_SESSION["zalogowany_uzytkownik"] */
	echo "<hr><br />";
	if( isset($_POST['a']) && isset($_POST['b']) && isset($_POST['dzialanie']) )
	{
		echo "<hr>Twoje poprzednie dzia³anie: <br />";
		$a=$_POST["a"];
		$b=$_POST["b"];
		$dzialanie=$_POST["dzialanie"];
		$wynik;
		
		if($a=='' || $b=='')
		{
			echo "Musisz podaæ dwie liczby";
		}
		
		else if ($dzialanie==1)
		{
			$wynik=$a+$b;
			echo $a."+".$b."=".$wynik;
		}
		else if ($dzialanie==2)
		{
			$wynik=$a-$b;
			echo $a."-".$b."=".$wynik;
		}
		else if ($dzialanie==3)
		{
			$wynik=$a*$b;
			echo $a."*".$b."=".$wynik;
		}
		else if ($dzialanie==4)
		{
			if($b=='0')
			{
				echo "Nie dziel przez zero";
			}
			else
			{
				$wynik=$a/$b;
				echo $a.":".$b."=".$wynik;
			}
		}
		echo '<hr><br /><br /><a href="cw_5.php">Wyloguj</a><br />';
	}
	?>
	
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		<p>
			<input type="text" name="a" maxlength="20" size="20"/>
		</p>
		<select name="dzialanie">
			<option value="1">+ -dodawanie</option>
			<option value="2">- -odejmowanie</option>
			<option value="3">* -mno¿enie</option>
			<option value="4">/ -dzielenie</option>
		</select>
		<p>
			<input type="text" name="b" maxlength="20" size="20"/>
		</p>
		<input type="submit" name="zaloguj" value="Oblicz"/>
	</form>
</body>
</html>
		