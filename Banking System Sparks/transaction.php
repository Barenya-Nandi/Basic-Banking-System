<!DOCTYPE html>
<?php
include 'connection.php';
$select1="SELECT * from table1 ";
$select2="SELECT * from table1 ";
$query1=$connection->query($select1);
$query2=$connection->query($select2);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="transaction.css">
    <title></title>
  </head>
  <body>
    <h1 class="tran">Amount Transfer</h1>
    <form class="money" action="transact.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Sender Name</label>
    <select name="sender" class="form-control" id="exampleFormControlSelect1" required>
    <?php
                  while($result=mysqli_fetch_array($query1))
                  {
                 ?>
                  <option value="<?php echo $result['Username']?>"><?php echo $result['Username']?></option>
                   <?php
              }
              ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Reciever Name</label>
    <select name="receiver" class="form-control" id="exampleFormControlSelect1" required>
       <?php
                  while($res=mysqli_fetch_array($query2))
                  {
                 ?>
                  <option value="<?php echo $res['Username']?>"><?php echo $res['Username']?></option>
                   <?php
              }
              ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Amount</label>
    <input name="amount" type="number" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="right">
    <button type="submit" name="button">Transact</button>
  </div>
    </form>
  </body>
</html>