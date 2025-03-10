<?php


session_start();


// Temporarily in $_POST structure.
$_SESSION['roll'] = $_POST['roll'];

$_SESSION['name']= $_POST['name'];

$_SESSION['class']= $_POST['class'];

		
?>

<!-- Form for other details-->
<form method="POST" action="form3.php">
	
	<pre>Subject 1: <input type="number"
		name="sub1">
	</pre>
<pre>Subject 2: <input type="number"
		name="sub2">
	</pre>
<pre>Subject 3: <input type="number"
		name="sub3">
	</pre>
<pre>Subject 4: <input type="number"
		name="sub4">
	</pre>
<pre>Subject 5: <input type="number"
		name="sub5">
	</pre>
<pre>Subject 6: <input type="number"
		name="sub6">
	</pre>

	<br>
	
	<input type="submit" value="Register">

</form>
