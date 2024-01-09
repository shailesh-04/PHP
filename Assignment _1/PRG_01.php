<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- This Is bootstrap File-->
  <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
  <form method="GET">
    <div class="container bg-dark text-light p-2">
      <div class="row text-center text-warning">
        <div class="col-12">
          <h1 class="border-bottom">PRG_1: Check Amtrong Number</h1>
        </div>
      </div>
      <div class="row p-2">
        <div class="col-4">
          <h4>Enter Any Value :- </h4>
        </div>
        <div class="col-8"><input type="text"name="Number" class="form-control"></div>
      </div>
      <div class="row p-3">
        <div class="col-4"><input type="submit" name="submit" class="btn bg-info"></div>
      </div>
      <div class="row">
        <div class="col-12">
          <?php
            if(isset($_GET['submit'])){
              $number = $_GET['Number'];
              $amstrong=0;
              $temp=$number;
              while($temp!=0){
                
                $rem = (int)$temp%10;
                $amstrong = $amstrong+$rem*$rem*$rem;
                $temp = $temp / 10; 
              }
              if($number == $amstrong)
                echo("<h4>The Number Is Amstrom :- $number</h4>");
              else
                echo("<h4>The Number Is Not Amstrom :- $number</h4>");
            } 
          ?>   
        </div>
      </div>
    </div>
  </form>
</body>
</html>