<html>
<head>
<title>
arunava pari
</title>
</head>
<body>
<?php
$conn = new mysqli("localhost","root", "", "student");
    $result = $conn->query("SELECT * FROM stud");
    
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"]."\t"; 
    

    }

   
   $conn->close();
?>



</body>
</html>