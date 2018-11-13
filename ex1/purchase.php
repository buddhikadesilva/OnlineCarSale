<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        
        $idLast=$_GET["Lastid"]; 
         $userID=$_GET["userID"]; 
        
        
$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE cart SET isActive=0 WHERE id=$idLast";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
     header('location:welcome.php?userID='.$userID.'');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
    </body>
</html>
