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
  <form method="POST">
    <div class="container bg-dark text-light p-4 mt-5 rounded">
      <!-- headder -->
      <div class="row text-warning">
        <div class="col-12 h1 border-3 border-bottom border-info ps-5 mb-4">
          Student Mark Sheet
        </div>
      </div>
      <!-- Name -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="Sname">Enter Student Name...</label>
        </div>
        <div class="col-6"><input type="text"name="Name" id="Sname" class="form-control"></div>
      </div>
      <!-- PHP MArk -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="PHP">Enter Student PHP Mark...</label>
        </div>
        <div class="col-6"><input type="number"name="PHP" id="PHP" class="form-control"></div>
      </div>
      <!-- OS Mark -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="OS">Enter Student OS Mark..</label>
        </div>
        <div class="col-6"><input type="number" name="OS" id="OS" class="form-control"></div>
      </div>
      <!-- VB MArk -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="VB">Enter Student VB.NET Mark...</label>
        </div>
        <div class="col-6"><input type="number"name="VB" id="VB" class="form-control"></div>
      </div>
      
      <!-- OOAD Mark -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="OOAD">Enter Student OOAD Mark..</label>
        </div>
        <div class="col-6"><input type="number" name="OOAD" id="OOAD" class="form-control"></div>
      </div>
      <!-- OOAD Mark -->
      <div class="row p-2">
        <div class="col-6 h4">
          <label for="PRT">Enter Student PRECTICAL Mark..</label>
        </div>
        <div class="col-6"><input type="number" name="PRT" id="PRT" class="form-control"></div>
      </div>
      <!-- Button -->
      <div class="row p-3">
        <div class="col-4"><input type="submit" name="submit" class="btn bg-info fs-5 p-2"></div>
      </div>
      <div class="row">
        <div class="col-12">
          <?php
            $conn = mysqli_connect("localhost","root","","KBP");
            if($conn)
              echo("<br> The Data Base Is Connected");
            else
              echo("<br> The Data base Not Connected");
            if($_POST['submit']){
              $name =$_POST['Name'];
              
              $php  =(int)$_POST['PHP'];
              $os   =(int)$_POST['OS'];
              $vb   =(int)$_POST['VB'];
              $ooad =(int)$_POST['OOAD'];
              $prect=(int)$_POST['PRT'];
              $total= ($php+$os+$vb+$ooad+$prect);
              $per  =$total/5.0;
              $result;
              if($php >= 39 && $os >= 39 && $vb >= 39 && $ooad >= 39 && $prect >= 39)
                $result = "PASS";
              else
               $result = "FAIL";
               
              $gread;
              if($per >= 85 && $result == "PASS")
                $gread = 'O';
              elseif ($per >= 75 && $result == "PASS")
                $gread = 'A';
              elseif ($per >= 65 && $result == "PASS")
                $gread = 'B';
              elseif ($per >= 45 && $result == "PASS")
                $gread = 'C';
              elseif ($per >= 39 && $result == "PASS")
                $gread = 'D';
              else
                $gread = '-';
                
              $query = ("INSERT INTO MarkSheet(Name,PHP,OS,VB,OOAD,Prectical,Total,Per,Grade,Result)VALUES('$name',$php,$os,$vb,$ooad,$prect,$total,$per,'$gread','$result')");
              
              if($conn->query($query)){
                header("location:index.php");
              }
              else{
                echo("Data Succssesfuly Not Store..");
                
              }
              
            }
          ?>   
        </div>
      </div>
    </div>
  </form>
</body>
</html>