
<!DOCTYPE HTML>
<html>
<body>

<?php 
	if(isset($_POST['submit'])) { //el�sz�r be vizsg�lom hogy l�tezik e m�r a submit ha igen akkor megy tov�bb
		echo $_POST['name'];
		echo "<br/>";
		echo $_POST['email'];
		echo "Today is " . date("Y/m/d") . "<br>"; //a mai d�tum �v h� nap ak�r milyen lehet
		//l�nyeg ebben az if r�szben kell vagy f�ljba ki mentened vagy pedig a szerverre am�g nincs adatb szer� addig nem tudom meg�rni neked
		
	}
?>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post"> <!--  a self r�sz miatt b�rmilyen php ba bele rakod ezt a formot mindenhol m�k�dni fog  -->
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
	comment: <br><textarea type="text" name="comment"></textarea><br>
	<input type="submit" name="submit"> 
</form>

</body>
</html>