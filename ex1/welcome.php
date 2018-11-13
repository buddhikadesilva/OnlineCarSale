<html>
        <head>
         <title>Online Shop - Welcome</title>
        <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
 
    <body>
 <div class="container">
     

<?php include 'header.php';?>
        <?php
     //   echo 'user name :' . $_SESSION['username'];

        if (empty($_SESSION['username'])) {
        //    header('location:index.php');
        }
 
$userID=$_GET["userID"]; 
        //
        
        $username = "root";
        $password = "";
        $hostname = "localhost";
        $db = "ex";

        //connection to the database
        $conn = mysqli_connect($hostname, $username, $password, $db)
                or die("Unable to connect to MySQL");

        //execute the SQL query and return records
        $result = mysqli_query($conn, "SELECT * FROM items");
        ?>
        
        <h1>Welcome to the Online Shop</h1><h4> <br>Lets start to shopping.</h4>
        
        <table class="table">
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row["name"] ."</td> "
                        . "<td> <img src=\"" . $row["image_url"] . "\" height=\"55%\" width=\"50%\"></img></td>";
                echo "<td><a href=item.php?id=".$row["id"]."&userID=".$userID.">View More Details</td>";
                echo "</tr>";
                
            }
        ?>
        </table>
 </div>
    </body>


</html>