<?php 
include "connection.php";
include('includes/header1.php');
include('includes/header.php');


$sql5 ="UPDATE visitor_counter SET count=count+1 WHERE count_id =1";
$connection->query($sql5);
$sql5="SELECT count FROM visitor_counter WHERE count_id = 1";
$result8=$connection->query($sql5);
if ($result8->num_rows > 0) {
        while($row = $result8->fetch_assoc()) {
            $visits = $row["count"];
            //echo $visits;
        }
    } else {
        echo "no results";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
 




</head>
<body>




    

</body>
</html>
