<html>
<head>
<title>
arunava pari
</title>
</head>
<body>
<?php
$conn = new mysqli("localhost","root", "", "arun");
$a = $_POST["j"];

    $result = $conn->query("DELETE FROM arun4 WHERE name = '".$a."'");
    
    if ($result) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }


   
   $conn->close();
?>



</body>
</html>