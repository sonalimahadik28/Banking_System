<?php
include 'DB.php';

if(isset($_POST['done'])){
    
    $transfer_from = $_POST['transfer_from'];
    $transfer_to = $_POST['transfer_to'];
    $transfer_amount = $_POST['transfer_amount'];
    $check_balance = "SELECT current_balance FROM customers WHERE name='$transfer_from'";
    $query_check = mysqli_query($con,$check_balance);
    $res=mysqli_fetch_array($query_check);
    $res1=$res['current_balance'];
   
    if($res1 > $transfer_amount){
    $q = "INSERT INTO `transfer`(`transfer_from`, `transfer_to`, `transfer_amount`) VALUES ('$transfer_from','$transfer_to','$transfer_amount')";
    
    $update_from = "UPDATE customers SET current_balance = current_balance - '$transfer_amount' WHERE name = '$transfer_from'";
    $update_to = "UPDATE customers SET current_balance = current_balance + '$transfer_amount' WHERE name = '$transfer_to'";
    $query = mysqli_query($con,$q);
    $query_from = mysqli_query($con,$update_from);
    $query_to = mysqli_query($con,$update_to);
    if($query){
        echo '<script type="text/JavaScript"> alert("Money Transfered Successfully.."); </script>';
        echo '<meta http-equiv="refresh" content="0">';
    }else{
        echo '<script type="text/JavaScript"> alert("Transfered Failed.."); </script>';
        echo '<meta http-equiv="refresh" content="0">';
    }
}
else{
    echo '<script type="text/JavaScript"> alert("Insufficient Balance.."); </script>';
    echo '<meta http-equiv="refresh" content="0">';
}
}
?>
<html>
    <head><title>Money Transfer</title>
    <link rel="stylesheet" href="style2.css">
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
    <h1>MONEY TRANSFER</h1>
    <form class="form" method="post" >
            <h3>FROM</h3>
            <select class="select" name="transfer_from" required>
            <option disabled selected>-- Select Customer --</option>
            <?php
                include 'DB.php';  // Using database connection file here
                $records = mysqli_query($con, "SELECT id,name From customers");  // Use select query here 

                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
                }	
            ?>  
            </select>
            <h3>TO</h3>
            <select class="select" name="transfer_to" required>
            <option disabled selected>-- Select Customer --</option>
            <?php
                include 'DB.php';  // Using database connection file here
                $records = mysqli_query($con, "SELECT id,name From customers");  // Use select query here 

                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
                }	
            ?>  
            </select>
            <h3>AMOUNT</h3>
            <input class="input1" type="text" name="transfer_amount" placeholder="Amount" required>
            <br> <br> <br>
            <input class="btn" type="submit" name="done" value="Transfer">
            <input class="btn1" type="reset" name="reset" value="Reset">
    </form> 
<br>
    </body>
</html>