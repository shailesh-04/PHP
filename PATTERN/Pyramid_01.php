<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./bootstrap.min.css" type="text/css" media="all" />
  <style type="text/css" media="all">
      .boxInpt{
       position: relative; 
       font-weight: 500;
    }
    .boxInpt > label{
      position: absolute;
      transform: translate(1rem,40%);
      z-index: 1;
      background:#fff;
      color: #555;
      transition: all .6s;
      border-radius: .2rem;
      padding: 0 .5rem ;
    }
    .boxInpt:hover > label{
      color: #000;
      transform: translate(1rem,-50%);
      border-left: 3px solid #63b6eb;
    }
    .btn{
      font-weight: 500;
      padding: .8rem 2rem;
    }
  </style>
</head>
<body>
  <form method="POST">
    <div class="container bg-dark p-3 mt-4 text-light border border-4 border-secondry rounded">
      <div class="row p-3 ">
        <div class="col-12 border-bottom border-4 text-warning">
          <h2>PYRAMID : 1</h2>
        </div>
      </div>
      <div class="row p-3">
        <div class="boxInpt col-12">
      <label for="inptNumber" onmouseout="Valid()">Enter Any Number. . .</label>
      <input type="number" name="inptNumber" id="inptNumber" class="form-control" onkeyup="Valid()" required/>
    </div>
      </div>
      <div class="row p-3">
        <div class="col-12">
          <input type="submit" name="submit" id="submit" value="Submit" class="btn bg-warning" />
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h4 class="text-center border-4 border-bottom"></h4>
          <h5>
          <?php
            if(isset($_POST['submit'])){
              $num = $_POST['inptNumber'];
              for($i=0; $i<$num; $i++){
                for($j=0; $j<=$i; $j++)
                  echo(" * ");
                echo("<br>");
              }
            }
          ?>  
          </h5>
        </div>
      </div>
    </div>
  </form>
</body>
<script type="text/javascript" charset="utf-8">
  const label = document.querySelector(".boxInpt > label");
  const input = document.querySelector(".boxInpt > input");
  function Valid(){
    if(input.value != ""){
      label.style.transform="translate(1rem,-50%)";
      label.style.color="#000";
      label.style.borderLeft="3px solid #63b6eb";
    }
  }
</script>
</html>