
<!DOCTYPE HTML>
<html>
<body>

<?php 
	if(isset($_POST['submit'])) { //elõször be vizsgálom hogy létezik e már a submit ha igen akkor megy tovább
		echo $_POST['name'];
		echo "<br/>";
		echo $_POST['email'];
		echo "Today is " . date("Y/m/d") . "<br>"; //a mai dátum év hó nap akár milyen lehet
		//lényeg ebben az if részben kell vagy fáljba ki mentened vagy pedig a szerverre amíg nincs adatb szeró addig nem tudom megírni neked
		
	}
?>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post"> <!--  a self rész miatt bármilyen php ba bele rakod ezt a formot mindenhol móködni fog  -->
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
	comment: <br><textarea type="text" name="comment"></textarea><br>
	<input type="submit" name="submit"> 
</form>

</body>
</html>