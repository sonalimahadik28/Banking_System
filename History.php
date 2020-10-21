<?php
include 'DB.php';
?>

<html>
<head><title>History</title>
<link rel="stylesheet" href="style3.css">
</head>
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
<h1>History</h1>
        <table class="tab">
            <tr>
                <th>From</th>
                <th>To</th>
                <th>Transaction Amount</th>              
            </tr>
            <?php

            include 'DB.php';
            $q="SELECT * FROM transfer";
            $query=mysqli_query($con,$q);
            while($res=mysqli_fetch_array( $query)){
            ?>
            <tr>
                <td><?php echo $res['transfer_from']?></td>
                <td><?php echo $res['transfer_to']?></td>
                <td><?php echo $res['transfer_amount']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
       <br>
</body>
</html>


