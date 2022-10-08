<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="create">
        <h3 style="text-align:center;background-color:#9bafd0;padding:9px 0;">Enter New Details</h3>

        <form action="" method="post">
       
                <input type="text" name='firstname' placeholder="Enter Your Firstname" required>

                <input type="text" name='designation' placeholder="Enter Your Designation" required>

                <input type="text" name='address1' placeholder="Enter Your Address1" required>

                <input type="text" name='address2' placeholder="Enter Your Address2" required>

                <input type="text" name='city' placeholder="Enter Your City" required>

                <input type="text" name='state' placeholder="Enter Your State" required>

                <input type="text" name='emailId' placeholder="Enter Your Email" required>

                <input type="submit" class="btn" name="submit" value="submit">

        </form>

     </div>

     <?php
        include_once 'database.php';

        if(isset($_POST["submit"])){
            $firstname = $_POST["firstname"];
            $designation = $_POST["designation"];
            $address1 = $_POST["address1"];
            $address2 = $_POST["address2"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $emailId = $_POST["emailId"];

            $sql="insert into address_book(firstname, designation, address1, address2, city, state, emailId) values('$firstname','$designation','$address1','$address2','$city','$state','$emailId')";
            
            if(mysqli_query($conn,$sql)){
                echo "<h1 style='color:green;text-align:center;'>New data inserted successfully<br/>";
            }

            else{
                echo "Cannot add data try again<br/>";
            }
        }
        
        mysqli_close($conn);
     ?>
</body>
</html>