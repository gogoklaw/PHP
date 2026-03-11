<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> ADD Customer </h1>
        <form action = "addcustomer.php" method="POST">
            <label for = "CustomerID">CustomerID</label><br>
            <input type= "text" id = "CustomerID" name = "CustomerID"><br>

            <label for = "Name">Name</label><br>
            <input type= "text" id = "Name" name = "Name"><br>

            <label for = "Birthdate">Birthdate</label><br>
            <input type= "date" id = "Birthdate" name = "Birthdate"><br>

            <label for = "Email">Email</label><br>
            <input type= "Email" id = "Email" name = "Email"><br>

            <label for = "CountryCode">CountryCode</label><br>
            <input type= "Text" id = "CountryCode" name = "CountryCode"><br>

            <label for = "OutstandingDebt">Outstandingdebt</label><br>
            <input type= "number" id = "OutstandingDebt" name = "OutstandingDebt">
            <br> <br>
            <input type = "submit">
        </form>
    
</body>
</html>

<?php
    if (isset($_POST['CustomerID']) && isset($_POST['Name'])):
    echo "<br>" . $_POST['CustomerID'] . $_POST['Name'] . $_POST['Birthdate'] . $_POST['Email'] . $_POST['CountryCode'] . $_POST['OutstandingDebt'];

    require 'connect.php';

    $sql = "insert into customer values(:CustomerID, :Name, :Birthdate, :Email, :CountryCode, :OutstandingDebt)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':CustomerID' , $_POST['CustomerID']);
    $stmt->bindParam(':Name' , $_POST['Name']);
    $stmt->bindParam(':Birthdate' , $_POST['Birthdate']);
    $stmt->bindParam(':Email' , $_POST['Email']);
    $stmt->bindParam(':CountryCode' , $_POST['CountryCode']);
    $stmt->bindParam(':OutstandingDebt' , $_POST['OutstandingDebt']);
    
    if ($stmt->execute()) :
    $message = 'Successfully add new customer';
else :
    $message = 'fail to add new customer';
endif;

echo $message;
$conn = null;

endif;
?>
