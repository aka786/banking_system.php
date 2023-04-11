<?php 
include "nav.php"
?>
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Foundation Bank</title>
    <link rel="stylesheet" href="transcation_history.css">
    <style media="screen" type="text/css">
        body{
            background:linear-gradient(to bottom left, blue, whitesmoke,yellow);
        }
        footer{
            padding:10px;
        }
        th {
            text-align: center;
        }
        td,th{
            text-align: center;
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
    
    <table class="transactions">
        <tr>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount Transfered</th>
            <th>Date and Time (yy/mm/dd and hr/min/sec)</th>
        </tr>
        <?php
         $res=mysqli_query($conn,"SELECT * FROM transactions");
         while($row=mysqli_fetch_array($res))
        {
             echo "<tr>";
             echo "<td>"; echo $row["Sender"]; echo "</td>";
             echo "<td>"; echo $row["Receiver"]; echo "</td>";
             echo "<td>"; echo $row["Amount"]; echo "</td>";
             echo "<td>"; echo $row["date"]; echo "</td>";
             echo "</tr>";
        }
        ?>
     </table>
     <div class="last">
    <?php
    include "footer.php"
    ?>
   </div>
</body>