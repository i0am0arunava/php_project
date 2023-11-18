<html>
<head>
<title>
arunava pari
</title>
</head>
<body>
<?php
   echo "this is for user validation </br>";
    $a = $_POST["fname"];
    $b = $_POST["lname"];
    $c = $_POST["email"];
    $d = $_POST["password"];
   


   $conn=new mysqli("localhost","root","","student");
   $result = $conn->query("INSERT INTO stud VALUES('".$a."','".$b."','".$c."','".$d."');");
if($result){
   header("Location: home_page.php");
   exit();
}

   
   $conn->close();
?>



</body>
</html>