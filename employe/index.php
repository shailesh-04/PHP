<?php
  require('./conn.php');  
  
  $data = $conn->query('select * from employee_table');
?>
  <title>Document</title>
  <style>
  
    #addnew,#addwork,#give,#viewdetailemploye{
      backdrop-filter: blur(20px);
    }
    #addnew form,#addwork form,#give form{
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
    }
    header *{
      color: #fff;
    }
  </style>
</head>
<body>
  <header class="d-flex p-3 ps-5 pe-5 bg-secondary justify-content-between">
    <h4>WorkInfo</h4>
    <nav class="d-flex d-block gap-4">
      <p href="">Home</p>
      <p onclick="openform('addnew')">Add New</p>
      <a href="./viewdetail.php">Detail</a>
      <a href="./viewdetail.php">ViewSaleryInfo</a>
    </nav>
  </header>
  <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>#Action</th>
  
          </tr>
        </thead>
        <tbody>
          <?php
            if(mysqli_num_rows($data) <= 0){
              echo('<tr>
                <td>Worker Is Not Avalable</td>
              </tr>');
              }
              else{
                foreach($data as $row){
                  echo("<tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[phone]</td>
                    <td><button type='button' class='btn bg-info text-dark' onclick='openaddworkform(\"addwork\",\"$row[id]\")'>addwork</button>
                    <button type='button' class='btn bg-danger text-dark' onclick='openaddworkform(\"give\",\"$row[id]\")'>Give</button>
                    <button type='button' class='btn bg-secondary text-dark' onclick='viewdetailemploye(\"viewdetailemploye\",\"$row[id]\",\"$row[name]\")'>Detail</button></td>
                    </tr>");
                }
              }
          ?>
        </tbody>
    </table>
  </div>
  
  
  <!-- ===================AddNew From ================ -->
  
  <div class="container-fluid h-100 position-absolute top-0 d-none" id="addnew">
    <form method="POST" class="w-50 position-absolute">
      <button type="button" class="btn bg-info text-dark h1 fs-5 position-absolute end-0 " onclick="closeform('addnew')">Close</button>
      <h1 class="text-center text-primary">Add New Worker</h1>
      <div class=" mt-4 border-bottom border-3 border-info">
        <label for="Name">Name</label>
        <input type="text" name="name" id="Name" placeholder="Enter Name" class="form-control" required>
      </div>
      <div class=" mt-4 border-bottom border-3 border-info">
        <label for="Name">Phone</label>
        <input type="number" name="phone" id="Phone" placeholder="Enter Phone" class="form-control" required>
      </div>
      
      <div class="mt-5 text-center ">
        <input type="submit" name="submit" value="Submit" class="btn bg-info w-25"> 
      </div>
    </form>
    
  <?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    if($conn->query("insert into employee_table(name,phone)value('$name','$phone')")){
      echo("<script>
      alert('Worker Is Addedd ');
      document.location.href='./index.php'
      </script>");
    }
    else{
      echo("erorr".mysqli_error($conn));
    }
  }
?>    
  </div>
  
  <!-- ===================Add Work From ================ -->
  
  <div class="container-fluid h-100 position-absolute top-0 d-none " id="addwork">
    <form method="POST" class="w-50 position-absolute">
      <button type="button" class="btn bg-info text-dark h1 fs-5 position-absolute end-0 " onclick="closeform('addwork')">Close</button>
      <h1 class="text-center text-primary">Enter Employe Work</h1>
      <input type="text" name="empId" class="d-none" id="empId" value="">
      <div class=" mt-4 border-bottom border-3 border-info">
        <label for="work">work</label>
        <input type="number" name="work" id="Name" placeholder="Enter employe work work" class="form-control" required>
      </div>
      <div class=" mt-4 border-bottom border-3 border-info">
        <label for="Name">price</label>
        <input type="number" name="price" id="price" placeholder="Enter price of work" class="form-control" value="10" required>
      </div>
      
      <div class="mt-5 text-center ">
        <input type="submit" name="submitwork" value="Submit" class="btn bg-info w-25"> 
      </div>
    </form>
    <?php
    if(isset($_POST['submitwork'])){
      $work = $_POST['work'];
      $price= $_POST['price'];
      $total = $work * $price;
      $empId = $_POST['empId'];
      $date = date("d/m/Y/[D]");
      
      if($conn->query("insert into salery(empId,empwork,price,date,salery,givensalery)value('$empId','$work','$price','$date',$total,0)")){
        echo("<script>
        alert('Done');
        document.location.href='./index.php';
        </script>");
        }
      }
    ?>
  </div>
  
  <!-- ===================Givr salery ========================= -->
  <div class="container-fluid h-100 position-absolute top-0 d-none " id="give">
    <form method="POST" class="w-50 position-absolute">
      <button type="button" class="btn bg-info text-dark h1 fs-5 position-absolute end-0 " onclick="closeform('give')">Close</button>
      <h1 class="text-center text-danger">Give employe salary</h1>
      <div class=" mt-4 border-bottom border-3 border-info">
        <label for="givensalery">Give</label>
        <input type="number" name="givensalery" id="givensalery" placeholder="Enter employe givensalery" class="form-control" required autofocus>
      </div>
      <div class="mt-5 text-center ">
        <input type="text" name="empId" class="d-none" id="empId" value="">
        <input type="submit" name="submitgive" value="Give" class="btn bg-info w-25"> 
      </div>
    </form>
    <?php
    if(isset($_POST['submitgive'])){
      $work = 0;
      $price= 0;
      $total = $work * $price;
      $empId = $_POST['empId'];
      $date = date("d/m/Y/[D]");
      $give = $_POST['givensalery'];
      if($conn->query("insert into salery(empId,empwork,price,date,salery,givensalery)value('$empId','$work','$price','$date',$total,$give)")){
        echo("<script>
        alert('Done');
        document.location.href='./index.php';
        </script>");
        }
    }
        ?>
  </div>
  <div class="container-fluid h-100 position-absolute top-0 d-none" id="viewdetailemploye">
    <button type="button" class="btn bg-info text-dark h1 fs-5 position-absolute end-0 top-0 mt-4 me-5 " onclick="closeform('viewdetailemploye')">Close</button>
    <div class="container pt-5">
    <table class="table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Id</th>
          <th>Name</th>
          <th>work</th>
          <th>price</th>
          <th>employSalery</th>
        </tr>
      </thead>
      <tbody id="tbody"></tbody>
  </div>  
  <?php
    
  ?>
</body>
<script>
  function openform(form){
    document.querySelector(`#${form}`).classList.remove('d-none');
  }
  function closeform(form){
    document.querySelector(`#${form}`).classList.add('d-none');
  }
  function openaddworkform(form,id){
    document.querySelector(`#${form}  #empId`).value=id;
    document.querySelector(`#${form}`).classList.remove('d-none');
    
  }
  function viewdetailemploye(form,id,name){
    var total=0;
    document.querySelector(`#${form}`).classList.remove('d-none');
    document.querySelector('#tbody').innerHTML=''
    let formData = new FormData();
    
    formData.append("api",'viewdetailemploye');
     fetch(`./api.php?id=${id}`,{
      method:'POST',
      headers:{'Contant-type': 'application/json'},
      body: formData,
    }).then(res=>res.json())
    .then(res=>{
         res.forEach(row=> {
           if(row.date.split('/')[0]==01){
            const tr = document.createElement('tr');
            tr.innerHTML = `<td colspan='6' class='text-success'><h3 class='text-end'>Employe salery of that month : ${total}</td></h3>`;
            document.querySelector('#tbody').appendChild(tr); 
            total=0;
           }
        const tr = document.createElement('tr');
        tr.innerHTML = `
        <td>${row.date}</td>
          <td>${row.id}</td>
          <td>${name}</td>
          <td>${row.empWork}</td>
          <td>${row.price}</td>
        `;
        if(row.salery!="0"){
          tr.innerHTML += `<td class='text-success'>+${row.salery}</td>`;
          total = total+parseFloat(row.salery); 
          
        }
        else{
          tr.innerHTML += `<td class='text-danger'>-${row.givensalery}</td>`;
          total = total-parseFloat(row.givensalery);
        }
        document.querySelector('#tbody').appendChild(tr);
        
      });
      const tr = document.createElement('tr');
        tr.innerHTML = `<td colspan='6' class='text-success'><h3 class='text-end'>Employe salery of that month : ${total}</td></h3>`;
        document.querySelector('#tbody').appendChild(tr);
    }); 
  }
  
</script>
</html>
