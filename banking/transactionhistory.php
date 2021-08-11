<?php
$server="localhost";
$username="root";
$password="";
$mysqli = new mysqli($server, $username, $password);
$mysqli->select_db("banking");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
$sql="SELECT a.transid,a.senderid,b.name,a.receiverid,a.receivername,a.amount,a.date from `transaction` AS a INNER JOIN `customers` AS b ON a.senderid= b.id  ORDER BY a.transid";
$result=$mysqli->query($sql);
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Sparks Bank</title>
      <link rel="icon" href="images/favicon.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<?php include 'styles.php' ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>



  </head>
  <body style="background:#FFE6E6;
  font-family: 'Merriweather Sans', sans-serif;">
  <div class="head">
  <i class="fas fa-history fa-4x"></i>
  <h1 class="heading">Transaction History</h1>
  </div>
  <div id="tabdiv">


  <table class="table  table-bordered">
    <thead class="thead-light">
      <tr>
        <th scope="col">Transaction Id</th>
        <th scope="col">Sender Id</th>
        <th scope="col">Sender Name</th>
        <th     scope="col">
      Receiver Id
        </th>
        <th     scope="col">
      Receiver Name
        </th>
        <th     scope="col">
      Amount Transfered
        </th>
        <th     scope="col">
  Date Of Transaction
        </th>
      </tr>
    </thead>
    <tbody>
      <?php while($row=$result->fetch_array(MYSQLI_NUM)){
      ?>
<tr>

  <td scope="row"><?php echo $row[0]; ?></td>
    <td  scope="row"><?php echo $row[1]; ?></td>
  <td  scope="row"><?php echo $row[2]; ?></td>
  <td  scope="row"><?php echo $row[3]; ?></td>
  <td  scope="row"><?php echo $row[4]; ?></td>
    <td  scope="row"><?php echo $row[5]; ?></td>
      <td  scope="row"><?php echo $row[6]; ?></td>

  </tr>
<?php } ?>
  </tbody>
  </table>
  </div>
  </body>
  </html>
