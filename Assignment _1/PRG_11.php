<!-- 
Wirte a php script to display following pyramid
     A
    BAB
   CBABC
  DCBABCD
 EDCBABCDE
-->

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
  <form action="" method="POST">
    <div class="container bg-dark text-light p-2">
      <div class="row text-center text-warning">
        <div class="col-12">
          <h1 class="border-bottom">PRG_12: Pattern 4</h1>
        </div>
      </div>
      <div class="row p-2">
        <div class="col-6">
          <h4>Enter Any Value :-</h4>
        </div>
        <div class="col-6"><input type="text"name="Number" class="form-control"></div>
      </div>
      <div class="row p-3">
        <div class="col-4"><input type="submit" name="submit" class="btn bg-info"></div>
      </div>
      <div class="row">
        <div class="col-12">
          <h3 class="">
          <?php
            if(isset($_POST['submit'])){
              $number = $_POST['Number'];
              for($i=65; $i<65+$number; $i++){
                for($sp = 65+$number; $sp>$i; $sp--)
                  echo(" &nbsp; ");
                for($j=$i; $j>=65; $j--)
                  echo(chr($j));
                for($j=66; $j<=$i; $j++)
                  echo(chr($j));
                echo("<br>");
              }
            } 
          ?>   
          </h3> 
        </div>
      </div>
    </div>
  </form>
</body>
</html>