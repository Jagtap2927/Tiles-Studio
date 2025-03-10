<?php
	//Initializing the session
	session_start();
    echo "Roll No:-";
     echo $_SESSION['roll'];
   echo "<br>";
  echo "Roll No:-";
    echo $_SESSION['name'];
       echo "<br>";
echo "Roll No:-";
    echo $_SESSION['class'];

$s1 = $_POST['sub1'];
$s2 = $_POST['sub2'];
$s3 = $_POST['sub3'];
$s4 = $_POST['sub4'];
$s5 = $_POST['sub5'];
$s6 = $_POST['sub6'];
echo "subject marks details";	
echo "<br>";
echo "Subject 1:-";echo $s1;
echo "<br>";
echo "Subject 2:-";echo $s2;
echo "<br>";
echo "Subject 3:-";echo $s3;
echo "<br>";
echo "Subject 4:-";echo $s4;
echo "<br>";
echo "Subject 5:-";echo $s5;
echo "<br>";
echo "Subject 6:-";echo $s6;
echo "<br>";
echo "Total Marks out of 600 is:-";

echo $s1+$s2+$s3;
	?>

