<?php
include 'DB.php';
$q="SELECT * FROM customers";
$query=mysqli_query($con,$q);
?>
<html>
    <head>
        <title>Customer Details</title>
    </head>
    <link rel="stylesheet" href="style1.css">
    <body>
    <header>
    <div class="logo"><img src=".//Images/Logo.jpg" height="130px" width="130px"></div>
        <p><b>Banking System</b><br><b class="name">The Future</b></p>
    <div class="anchor"><a href="index.html"><b>HOME</a></b></div>
    </header>
    <nav>
    <a href="./Customer_Details.php"><div class="nav"><b>Customer Details</b></div></a>
        <a href="./Money_Transfer.php"><div class="nav"><b>Money Transfer</b></div></a>
        <a href="./History.php"><div class="nav"><b>Transaction History</b></div></a>
    </nav>
        <h1>CUSTOMER DETAILS</h1>
        <table class="tab">
            <tr>
                <th>Customer Id</th>
                <th>Customer Name</th>
                <th>Email Id</th>
                <th>Location</th>
                <th>Current Balance</th>               
            </tr>
            <?php

            include 'DB.php';
            $q="SELECT * FROM customers";
            $query=mysqli_query($con,$q);
            while($res=mysqli_fetch_array( $query)){
            ?>
            <tr>
                <td><?php echo $res['id']?></td>
                <td><?php echo $res['name']?></td>
                <td><?php echo $res['email_id']?></td>
                <td><?php echo $res['location']?></td>
                <td><?php echo $res['current_balance']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>