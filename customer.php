<?php 
include "nav.php";
include "connection.php";
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Customers</title>
        <link rel="stylesheet" href="viewcustomer.css">
        <style media="screen" type="text/css">
            body{
                background:linear-gradient(to bottom left, blue, whitesmoke,yellow);
            }
            nav{
                font-weight: bold;
            }
            
            table{
                position: relative;
                bottom:20px;
                box-shadow: 0 5px 9px black;
            border-radius:23px;
            }
            table a button {
                border: none;
                font-weight: bold;
                border-radius: 13px;
                font-size: 15px;
                padding: 5px;
                color: black;
                background-color: salmon;
                transition: 0.25s;
                position:relative;
                left: 0px;
                
            box-shadow: 0 4px 5px black;
            }
            
            table a button:hover {
                color: black;
                background-color: silver;
                transform: translate(0, -2px);
                box-shadow: 0 1px 2px black;
                border-radius: 34px;
            box-shadow: 0 5px 9px black;
            }
            /* .footer {
                text-align: center;
                margin-top: auto;
                background-color: black;
                color: whitesmoke;
                padding:10px;
            } */
            .last{
    position:relative;
    top:50px;
}
.customers{
    /* background: linear-gradient(to bottom left, rgb(156, 153, 153), rgb(110, 110, 184),rgb(224, 171, 72)); */
    border-radius: 34px;
    border: none;
    border-radius: 34px; 
}
tr th{
    /* background:linear-gradient(to bottom left, blue, whitesmoke,pink,orange); */
    /* border-radius: 34px; */
    border: none;
}
.ak{
    position: relative;
    left: 400px;
    border-radius: 34px;
    border: none;
    border-radius: 34px; 
}
        </style>
    </head>

    <body>
      <div class="ak">

        <table class="customers">
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Current Balance</th>
                <th>Send Now</th>
            </tr>
            <?php
         $res=mysqli_query($conn,"SELECT * FROM customers");
         while($row=mysqli_fetch_array($res))
        {
             echo "<tr>";
             echo "<td>"; echo $row["id"]; echo "</td>";
             echo "<td>"; echo $row["Name"]; echo "</td>";
             echo "<td>"; echo $row["E-mail"]; echo "</td>";
             echo "<td>"; echo $row["Current Balance"]; echo "</td>";
             echo "<td>"; ?><a href="transcation.php? id=<?php echo $row["id"];?>"><button>Transfer</button></a><?php echo "</td>";
             echo "</tr>";
        }
         $conn->close();
        ?>
        </table>
        </div>
        <div class="last">
        <?php
include "footer.php";
?>
</div>

    </body>

    </html>
   

   