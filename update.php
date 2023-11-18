<html>
<head>
<title>
arunava pari
</title>
</head>
<body>
<?php
$a = $_POST["j"];
$b = $_POST["a"];
$conn = new mysqli("localhost","root", "", "arun");

    $result = $conn->query("UPDATE arun4 SET enroll_no='".$a."' WHERE name='".$b."'");
    if ($result) {
        echo "Record updated successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }


   
   $conn->close();
?>



</body>
</html>