

<?php
if(isset($_GET['id']))
{
$server="localhost";
$username="root";
$password="";
$mysqli = new mysqli($server, $username, $password);
$mysqli->select_db("banking");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
$sid=$_GET['id'];
$sql="SELECT `id`,`name`,`email`,`balance` FROM `customers` WHERE `id`=$sid";
$result=$mysqli->query($sql);
$row=$result->fetch_array(MYSQLI_NUM);
$sql2="SELECT `id`,`name`  FROM `customers`";
$result2=$mysqli->query($sql2);
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
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">





<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>



  </head>
<body style="background:#FFE6E6;
font-family: 'Merriweather Sans', sans-serif;">
  <h2 class="heading">Sender Details</h2>
  <table class="table  table-bordered">
    <thead class="thead-light">
      <tr>
        <th scope="col">Customer Id</th>
        <th scope="col">Customer Name</th>
        <th     scope="col">
      Email
        </th>
        <th     scope="col">
      Balance
        </th>

      </tr>
    </thead>
    <tbody>
<td scope="row"><?php echo $row[0]; ?></td>
<td  scope="row"><?php echo $row[1]; ?></td>
<td  scope="row"><?php echo $row[2]; ?></td>
<td  scope="row"><?php echo $row[3]; ?></td>
</tr>
</tbody>
</table>
<div>

  <div class="container">

  <div class="d-flex justify-content-center h-100">
  <div class="card">
    <h1>Transfer</h1>
    <div class="card-body">
      <form action="transferto.php" method="post">
        <div class="input-group form-group">

          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
          </div>
          <input type="text" name="sid" class="form-control" placeholder="Enter Sender Id">
        </div>
        <div class="input-group form-group">

          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
          </div>
          <input type="text" name="rid" class="form-control" placeholder="Enter Reciver Id">
        </div>

        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
              <select  class="form-control" name="rname">
                <?php while($row2=$result2->fetch_array(MYSQLI_NUM)){ ?>
                <option style="font-family: 'Lato', sans-serif;" class="form-control" value="<?php echo $row2[1];?>"><p><?php echo $row2[0] ." - ".$row2[1] ;?></p></option> <?php }} ?>
              </select>
        </div>
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-dollar-sign "></i></span>
          </div>
          <input type="text" name="amount" class="form-control" placeholder="Enter Amount">
        </div>
        <div class="form-group">

          <input type="submit" name="trans" value="Transfer" class="btn float-right login_btn">
            <button type="reset" class="btn login_btn " name="button">Reset</button>
        </div>
      </form>
    </div>

  </div>
  </div>
  </div>

</div>
</body>
</html>
