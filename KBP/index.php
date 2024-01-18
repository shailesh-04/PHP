<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
  <?
    $conn = new mysqli("localhost", "root", "", "KBP");
    if(!($conn))
      echo("Data BAse Is Not Connected");
    $sql = "SELECT * FROM MarkSheet";
    $result = $conn->query($sql);
    if($result){
      if($result->num_rows > 0){
  ?>
  <table class=" table bg-dark text-light text-center">
    <thead class="text-danger">
      <tr>
        <th colspan="100%">
          <h1>KBP ~ Student DataBase</h1>
        </th>
      </tr>
      <tr>
        <th>Roll</th>
        <th>Name</th>
        <th>PHP</th>
        <th>OS</th>
        <th>VB</th>
        <th>OOAD</th>
        <th>Prect</th>
        <th>Total</th>
        <th>Per</th>
        <th>Grade</th>
        <th>Result</th>
        <th colspan="2">Updt/del</th>
      </tr>
    </thead>
    <tbody>
    <?
      while($row = $result->fetch_array()){
        echo("
            <tr>
   	          <td>".$row[0]."</td>
   	          <td>".$row[1]."</td>
   	          <td>".$row[2]."</td>
   	          <td>".$row[3]."</td>
   	          <td>".$row[4]."</td>
   	          <td>".$row[5]."</td>
   	          <td>".$row[6]."</td>
   	          <td>".$row[7]."</td>
   	          <td>".$row[8]."</td>
   	          <td>".$row[9]."</td>
   	          <td>".$row[10]."</td>
   	          <td><a href='./Update.php?Roll=".$row[0]."'><input type='button' value='Edit' name='Edit' class='form-control'></a></td>
   	          <td><a href='./Delete.php?Roll=".$row[0]."'><input type='button' value='Delet' name='Delet' class='form-control'></a></td>
   	        </tr>
        ");
      }
    ?>  
    </tbody>
  </table>
  <a href="./Insert.php"><input type="submit" value="Insert New Record" name="insert" class='form-control'></a>
  <?
      }else
        echo("~~404 ERROR~~ RECORD IS NOT FOUND");
    }else
      echo("CAN'T EXICUTE THE QUERY .$sql. ERROR~~".$conn->erorr);
  ?>
</body>
</html>
