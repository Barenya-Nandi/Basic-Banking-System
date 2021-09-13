<?php
include 'connection.php';
$select="SELECT * from table2 ORDER BY id DESC ";
$query=$connection->query($select);
$nums=mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="history.css">
    <title>The Sparks Foundation</title>
  </head>
  <body>
    <div class="top">
      <h1>Transaction History</h1>
    </div>
    <div class="mid">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Sender</th>
      <th scope="col">Reciever</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
                  <?php
                  while($res=mysqli_fetch_array($query))
                  {
                 ?>
                 <tr>
                  <th scope="row"><?php echo $res['id']?></th>
                  <td><?php echo $res['Sender']?></td>
                  <td><?php echo $res['Reciever']?></td>
                  <td><?php echo $res['Amount']?></td>
                </tr>
                <?php
                  }
                  ?>
              </tbody>
</table>
</div>
  </body>
</html>