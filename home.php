<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="navigation">

        <a href="/iwp_lab/lab_assignment10/create.php"><i class="fa-solid fa-square-plus"></i></a>

        <a href="/iwp_lab/lab_assignment10/search.php"><i class="fa-solid fa-magnifying-glass"></i></a>

        <a href="/iwp_lab/lab_assignment10/update.php"><i class="fa-solid fa-pen"></i></a>

        <a href="/iwp_lab/lab_assignment10/delete.php"><i class="fa-solid fa-trash"></i></a>

    </div>

    <div class="table">
        <?php
            include_once 'database.php';

            $str="select * from address_book";

            if($result = mysqli_query($conn, $str)){

                if(mysqli_num_rows($result) > 0){
    
                    echo "<table style='width:80%;margin:auto'>";
    
                        echo "<tr style='background-color:#8BBCCC;color:white;font-size:24px'>";

                            echo "<th>User Id</th>";

                            echo "<th>FIRSTNAME</th>";
    
                            echo "<th>DESIGNATION</th>";
    
                            echo "<th>ADDRESS1</th>";

                            echo "<th>ADDRESS2</th>";
    
                            echo "<th>CITY</th>";
    
                            echo "<th>STATE</th>";
    
                            echo "<th>EMAIL</th>";
    
                        echo "</tr>";
    
                    while($row = mysqli_fetch_array($result)){
    
                        echo "<tr style='background-color:#FFD372;color:black;font-size:large;'>";
    
                            echo "<td>" . $row['Personid'] . "</td>";
    
                            echo "<td>" . $row['firstname'] . "</td>";
    
                            echo "<td>" . $row['designation'] . "</td>";
    
                            echo "<td>" . $row['address1'] . "</td>";
    
                            echo "<td>" . $row['address2'] . "</td>";
    
                            echo "<td>" . $row['city'] . "</td>";
    
                            echo "<td>" . $row['state'] . "</td>";
    
                            echo "<td>" . $row['emailId'] . "</td>";
    
                        echo "</tr>";
    
                    }
    
                    echo "</table>";
    
                    // Free result set
    
                    mysqli_free_result($result);
    
                } else{
    
                    echo "No records matching your query were found.";
    
                }
    
            } else{
    
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    
            }
        ?>

    </div>
    <script src="https://kit.fontawesome.com/f79dcd66bd.js" crossorigin="anonymous"></script>
    
</body>
</html>