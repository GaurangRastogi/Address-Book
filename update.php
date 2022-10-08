<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="create">
        <h3 style="text-align:center;background-color:#9bafd0;padding:9px 0;">Update User Details</h3>

        <form action="" method="post">

                <input type="text" name='Personid' placeholder="Enter ID to Update" required>

                <input type="text" name='firstname' placeholder="Updated Firstname" required>

                <input type="text" name='designation' placeholder="Updated Designation" required>

                <input type="text" name='address1' placeholder="Updated Address1" required>

                <input type="text" name='address2' placeholder="Updated Address2" required>

                <input type="text" name='city' placeholder="Updated City" required>

                <input type="text" name='emailId' placeholder="Updated Email" required>

                <input type="submit" class="btn" name="update" value="update">

        </form>

     </div>

     <?php
        include_once 'database.php';

        if(isset($_POST["update"])){
            $Personid=$_POST["Personid"];
            $firstname = $_POST["firstname"];
            $designation = $_POST["designation"];
            $address1 = $_POST["address1"];
            $address2 = $_POST["address2"];
            $city = $_POST["city"];
            $emailId = $_POST["emailId"];

            $sql= "update address_book set firstname='$firstname', designation='$designation', address1='$address1', address2='$address2', city='$city', emailId='$emailId' where PersonId='$Personid'";
            
            if(mysqli_query($conn,$sql)){
                echo "<h1 style='color:green;text-align:center;'>Updated successfully<br/>";
            }

            else{
                echo "Cannot add data try again<br/>";
            }
        }
        
        mysqli_close($conn);
     ?>
</body>
</html>