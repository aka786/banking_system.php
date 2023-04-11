<?php 
include "nav.php"
?>
<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' prompt("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }


  
    
    else if($amount > $sql1['Current Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' prompt("Ohh! Insufficient Balance")'; 
        echo '</script>';
    }
    


   
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "prompt('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['Current Balance'] - $amount;
                $sql = "UPDATE `customers` SET `Current Balance`=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['Current Balance'] + $amount;
                $sql = "UPDATE `customers` SET `Current Balance`=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO `transactions` (`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='view_customers.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="select_transfer.css">
    <style media="screen" type="text/css">
        body{
            background:linear-gradient(to bottom left, blue, whitesmoke,yellow);
            
        }
        div.transfer{
            margin:auto;
            position:relative;
            bottom: 30px;
            background-color: salmon;
            padding:20px;
            font-family: Arial, sans-serif;
            border-radius:23px;
            box-shadow:0 5px 9px black;
        }
        div table {
            font-family: arial, sans-serif;
            display: table;
            margin: auto;
            background-color: rgb(150,22, 60);
            color: whitesmoke;
            /* border-collapse: collapse; */
            box-shadow: 0 4px 5px black;
            border-radius:23px;
        }
        h2{
            font-size:30px;
        }

        table th {
            background-color: black;
            color: whitesmoke;
        }

        tr {
            color: black;
            font-weight: bold;
        }

        td,
        th {
            /* border: 1px solid #b8a6a6; */
            text-align: left;
            padding: 8px;
        }
        #receiver{
            height:22px;
            padding:1px 2px;
            border:2px;
            box-shadow: 0 4px 5px black;
            border-radius:23px;
        }
        #amount{
            border:2px;
            box-shadow: 0 4px 5px black;
            border-radius:23px;
        }
        button{
            position:relative;
            left:150px;
            bottom:10px;
            border:none;
            padding:10px;
            color:black;
            font-weight: bold;
            border-radius:5px;
            background-color:silver;
            font-family:Arial, Helvetica, sans-serif;
            transition: 0.25s;
            box-shadow: 0 4px 5px black;
        }
        button:hover{
            color:whitesmoke;
            background-color: blue;
            transform: translate(0, -3px);
            box-shadow: 0 6px 9px black;
            border-radius:23px;
        }
        footer{
            padding:10px;
        }
        nav{
            font-weight: bold;
        }
        .last{
    position:relative;
    top:400px;
}

    </style>
</head>

<body>
   
	<div class="transfer">
        <h2 style="text-align:center">Transfer Money</h2>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = " SELECT * FROM  customers Where id = $sid ";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit"><br>
        <div>
            <table>
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Current Balance</th>
                </tr>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['Name'] ?></td>
                    <td><?php echo $rows['E-mail'] ?></td>
                    <td><?php echo $rows['Current Balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label for="receiver" style="font-weight:bold">Transfer To:</label>
        <select id="receiver" name="to" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['Name'] ;?> (Balance: 
                    <?php echo $rows['Current Balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
        </select>
        <br>
        <br>
            <label style="font-weight:bold" for="amount">Amount in &#x20B9;
            :</label>
            <input id="amount" type="number" name="amount" required>   
            <br><br><br>
            <div>
                <button name="submit" type="submit">Transfer</button>
            </div>
        </form>
    </div>
   <div>
    <?php
    include "footer.php"
    ?>
   </div>
</body>