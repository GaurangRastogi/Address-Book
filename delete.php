<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete  Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="create delete">
        <h3 style="text-align:center;background-color:#9bafd0;padding:9px 0;">Delete User</h3>

        <form action="" method="post">

                <input type="text" name='Personid' placeholder="Enter ID to Delete" required>

                <input type="submit" class="btn" name="delete" value="delete">

        </form>

     </div>

     <?php
        include_once 'database.php';

        if(isset($_POST["delete"])){
            $Personid=$_POST["Personid"];
        
            $sql= "delete from address_book where Personid='$Personid'";
            
            if(mysqli_query($conn,$sql)){
                echo "<h1 style='color:green;text-align:center;'>Deleted successfully<br/>";
            }

            else{
                echo "Cannot add data try again<br/>";
            }
        }
        
        mysqli_close($conn);
     ?>
</body>
</html>