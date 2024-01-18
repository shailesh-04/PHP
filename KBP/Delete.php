<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href=" ./bootstrap.min.css">
  <style>
    .container{
      width: 70%;
    }
  </style>
</head>
<body class=" bg-secondary">
  <?
    $conn = mysqli_connect("localhost","root","","KBP");
    $roll = $_GET['Roll'];
    if(!($conn))
      echo("<script>alert('The Data Base Is Not Connected');</script>");
    $sql = "SELECT * FROM MarkSheet WHERE Roll = '$roll'";
    $data = $conn->query($sql);
    $data = $data->fetch_array();
  ?>
  <form method="POST">
    <div class="container bg-dark text-light p-4 mt-5 rounded">
      <!-- headder -->
      <div class="row text-warning">
        <div class="col-12 h1 border-3 border-bottom border-info ps-5 mb-4">
        DELET Student Mark Sheet
        </div>
      </div>
      <!-- Name -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="Sname">Enter Student Name...</label>
        </div>
        <div class="col-6"><input type="text"name="Name" id="Sname" class="form-control" value="<?echo($data[1]);?>" disabled></div>
      </div>
      <!-- PHP MArk -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="PHP">Enter Student PHP Mark...</label>
        </div>
        <div class="col-6"><input type="number"name="PHP" id="PHP" class="form-control" value="<?echo($data[2]);?>" disabled></div>
      </div>
      <!-- OS Mark -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="OS">Enter Student OS Mark..</label>
        </div>
        <div class="col-6"><input type="number" name="OS" id="OS" class="form-control" value="<?echo($data[3]);?>" disabled></div>
      </div>
      <!-- VB MArk -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="VB">Enter Student VB.NET Mark...</label>
        </div>
        <div class="col-6"><input type="number"name="VB" id="VB" class="form-control" value="<?echo($data[4]);?>" disabled></div>
      </div>
      
      <!-- OOAD Mark -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="OOAD">Enter Student OOAD Mark..</label>
        </div>
        <div class="col-6"><input type="number" name="OOAD" id="OOAD" class="form-control" value="<?echo($data[5]);?>" disabled></div>
      </div>
      <!-- OOAD Mark -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="PRT">Enter Student PRECTICAL Mark..</label>
        </div>
        <div class="col-6"><input type="number" name="PRT" id="PRT" class="form-control" value="<?echo($data[6]);?>" disabled></div>
      </div>
      <!-- Button -->
      <div class="row p-3">
        <div class="col-4 h4">
          <label for="PRT">Do You Want To DELET Thi Racord...</label>
        </div>
        <div class="col-4"><input type="submit" name="delet" value="DELET" class="form-control bg-info fs-5 p-2"></div>
        <div class="col-4"><input type="submit" name="cencel" value="Cencel" class="form-control bg-info fs-5 p-2"></div>
      </div>
      <div class="row">
        <div class="col-12">
          <?php
            if(isset($_POST['cencel']))
              header("location:./index.php");
            if(isset($_POST['delet'])){
              $sql = "DELETE FROM MarkSheet WHERE Roll =   '$roll'";
              if($conn->query($sql)){
                echo("<script>alert('Successfuly Delet The redocrd..');</script>");
                header("location:./index.php");
              }
            }
          ?>   
        </div>
      </div>
    </div>
  </form>
  <!-- <script src="./ViewDBMarkSheet.php"></script> -->
</body>
</html>