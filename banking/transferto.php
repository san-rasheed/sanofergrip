<?php
if(isset($_POST['trans']))
{
$server="localhost";
$username="root";
$password="";
$mysqli = new mysqli($server, $username, $password);
$mysqli->select_db("banking");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
$sid=$_POST['sid'];
$rid=$_POST['rid'];
$rname=$_POST['rname'];
$amount=$_POST['amount'];
//sender
$ssql="SELECT `balance` from `customers` where `id`=$sid";
$s_result=$mysqli->query($ssql);
$s_row=$s_result->fetch_array(MYSQLI_NUM);
$sbal=$s_row[0];
  //receiver
$rsql="SELECT `balance` from `customers` where `id`=$rid";
  $r_result=$mysqli->query($rsql);
    $r_row=$r_result->fetch_array(MYSQLI_NUM);
    $rbal=$r_row[0];
if($sbal < $amount)
{
echo '<script type="text/javascript">window.alert("Insufficient Balance");</script>';

}
elseif ($amount ==null) {
  echo '<script type="text/javascript">window.alert("Please enter valid amount");</script>';
}
else{
  $sbal=$sbal-$amount;
  $sql2="UPDATE `customers` set `balance`=$sbal WHERE `id`=$sid";
  $mysqli->query($sql2);

  $rbal=$rbal+$amount;
  $sql3="UPDATE `customers` set `balance`=$rbal WHERE `id`=$rid";
  $mysqli->query($sql3);

  $sql4="INSERT INTO  `transaction` (`senderid`,`receiverid`,`receivername`,`amount`,`date`) VALUES ('$sid','$rid','$rname','$amount',current_timestamp())";
  $mysqli->query($sql4);


$sql5="SELECT `transid` from `transaction` ORDER BY `transid` DESC LIMIT 1";
  $mysqli->query($sql5);
  $result=$mysqli->query($sql5);
    $row=$result->fetch_array(MYSQLI_NUM);
  echo '<div id="success"><h2>Sparks Bank</h2><p>Transaction id: '.$row[0].'</p><p>Transaction amount of Rs. '.$amount.' from Sender id: '.$sid.' to Receiver id:  '.$rid.' is successful </p>  <div id="btndiv">    <a href="index.php"><button class="btn login_btn" >Ok</button> </a>   <a href="#" onclick="window.print()"><button class="btn login_btn" style="width:180px">Print the receipt</button></a>  </div>  </div>';
}
}
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



  </head>
<body style="background:#FFE6E6;
font-family: 'Merriweather Sans', sans-serif;">

</body>
</html>
