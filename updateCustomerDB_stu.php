<?php
    require "connect.php";
if (isset($_POST['CustomerID'])) {

    $CustomerID = $_POST['CustomerID'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Birthdate = $_POST['Birthdate'];
    $OutstandingDebt = $_POST['OutstandingDebt'];
    $CountryCode = $_POST['CountryCode'];

    // echo 'CustomerID = ' . $CustomerID;
    // echo 'Name = ' . $Name;
    // echo 'Email = ' . $Email;


    $stmt = $conn->prepare(
        'UPDATE customer
        SET Name = :Name,
            Email = :Email,
            Birthdate = :Birthdate,
            OutstandingDebt = :OutstandingDebt,
            CountryCode = :CountryCode
        WHERE CustomerID = :CustomerID'
    );
    $stmt->bindparam(':Name', $Name);
    $stmt->bindparam(':Email', $Email);
    $stmt->bindParam(':Birthdate', $Birthdate);
    $stmt->bindParam(':OutstandingDebt', $OutstandingDebt);
    $stmt->bindParam(':CountryCode', $CountryCode);
    $stmt->bindparam(':CustomerID', $CustomerID);

    $stmt->execute();


    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    if ($stmt->rowCount() >= 0) {
        echo '
        <script type="text/javascript">
        
        $(document).ready(function(){
        
            swal({
                title: "Success!",
                text: "Successfuly update customer information",
                type: "success",
                timer: 2500,
                showConfirmButton: false
              }, function(){
                    window.location.href = "index_stu.php";
              });
        });
        
        </script>
        ';
    }
    $conn = null;
}