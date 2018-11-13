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


        <?php include 'header.php'; 

  
        $id = $_GET["id"];
        $userID = $_GET["userID"];
        
     
        //   echo 'user name :' . $_SESSION['username'];

        if (empty($_SESSION['username'])) {
            //    header('location:index.php');
        }

        //

        $username = "root";
        $password = "";
        $hostname = "localhost";
        $db = "ex";

        //connection to the database
        $conn = mysqli_connect($hostname, $username, $password, $db)
                or die("Unable to connect to MySQL");

        //execute the SQL query and return records
        $sql = "SELECT * FROM items where id=" . $id;
        ?>

        <table class="table">
            <?php
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    $uPrice = $row["unit_price"];

                    echo "<tr>";
                    echo "<td><h3> " . $row["name"] . "</h3></td><td><h4>  Price: " . $uPrice . "</h4></td><br>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td> <center><img src=\"" . $row["image_url"] . "\" height=\"50%\" width=\"70%\"></img></center></td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>



        </table>

        <form class="form-horizontal" method="post" action="curt.php?id=<?php echo $id ?>&userID=<?php echo $userID ?>">
            <div class="form-group">
                <label class="control-label col-sm-2" for="user">     Unit Price  :</label>
                <div class="col-sm-10">
                    <input name="price" type="text" value="<?php echo $uPrice ?>" readonly="readonly"  class="form-control" id="user" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="add">  Quantity :</label>
                <div class="col-sm-10">
                    <input type="text" name="qty"  class="form-control" id="user" placeholder="Enter Quantity" required="Enter Quantity">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Add to Cart</button>
                </div>
            </div>
        </form> 
    </body>
</html>
