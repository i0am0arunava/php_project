<html>
<head>
<title>
arunava pari
</title>
</head>
<body>
<?php
   echo "this is for user validation </br>";
   echo "User Name:".$_POST["txt_user_name"]."</br>";
   echo "Password:".$_POST["txt_pass"]."</br>";

   $conn=new mysqli("localhost","root","","arun");
   $result = $conn->query("SELECT * FROM arun1");
   while($row = $result->fetch_assoc()){
        
         echo $row["Name"]." ";
         echo $row["Enroll_Num"]." ";
         echo $row["Dept"]." ";
         echo $row["Section"]."</br> ";

   }
   $conn->close();
?>



</body>
</html>     