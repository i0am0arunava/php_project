<html>
<head>
<title>
arunava pari
</title>
</head>
<body>
<?php
   echo "this is for user validation </br>";
    $a = $_POST["j"];
    $b = $_POST["a"];
    $c = $_POST["b"];
    $d = $_POST["c"];
    $e = $_POST["d"];
    $f = $_POST["e"];
    $g = $_POST["f"];
    $h = $_POST["g"];
    $i = $_POST["h"];
    $j = $_POST["j"];


   $conn=new mysqli("localhost","root","","arun");
   $result = $conn->query("INSERT INTO arun4 VALUES('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."');");
echo "new user addded";

   
   $conn->close();
?>



</body>
</html>