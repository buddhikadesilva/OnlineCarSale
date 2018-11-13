<html>
    <body>

        <?php
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
        $result = mysqli_query($conn, "INSERT INTO cart");
        ?>
        
        <table>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row["name"] ."</td> "
                        . "<td> <img src=\"" . $row["image_url"] . "\"></img></td>";
                  echo "<td>" . $row["unit_price"] ."</td> ";
                echo "</tr>";
                
            }
        ?>
        </table>
           
    </body>


</html>