<html>

<head>
    <title>User Registration</title>
</head>

<body>

<h1>Add customer but not in order of columns</h1>

<form action="addcustomer_dropdownfull_swapinsert.php" method="POST">

    <input type="text" placeholder="Enter Customer ID" name="customerID">
    <br><br>

    <input type="text" placeholder="Name" name="name">
    <br><br>

    <input type="number" placeholder="OutStanding debt" name="outstandingDebt">
    <br><br>

    <input type="email" placeholder="Email" name="email">
    <br><br>

    <input type="date" placeholder="Birthdate" name="birthdate">
    <br><br>

    <label>Select a country code</label><br> <br>
    <select name="countrycode">

        <?php
        require 'connect.php';
        $sql_s = "SELECT * FROM country";
        $stmt_s = $conn->prepare($sql_s);
        $stmt_s->execute();
        // https://www.w3schools.com/tags/tag_select.asp
        while ($cc = $stmt_s->fetch(PDO::FETCH_ASSOC)) :
        ?>

        <option value="<?php echo $cc["CountryCode"]; ?>">
            <?php echo $cc["CountryName"]; ?>
        </option>

        <?php
        endwhile;
        ?>

    </select>

    <br><br>

    <input type="submit" value="Submit" name="submit" />

</form>

</body>
</html>