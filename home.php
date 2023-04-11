<?php
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
 #img{
        width:100%;
        height:800px;
        
      } 
      #card{
        display:flex;
        justify-content:center;
        justify-content:space-evenly;
        position:relative;
         top:150px;
      }
      h1{
        position:relative;
         top:100px;
        text-align:center;
      }
      .a{
        position:relative;
         top:300px;
        text-align:center;
      }
      .last{
    position:relative;
    top:400px;
}
#c1,#c2{
  width:286px;
        height:286px;
        background-color:slategrey;
}
body {
  background:linear-gradient(to bottom left, blue, whitesmoke,yellow);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            background-repeat: no-repeat;
            background-size: 1800px 1800px;
        }
.ak{
  position: relative;
  top:-110px;
  z-index: -1;
}
    
        </style>
</head>
<body>
  <div class="ak">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <h1 class="a" style="color:red"><i>Welcome 
      To Spark Foundation <br>Bank</i></h1>
      <img src="https://source.unsplash.com/2400x1150/?banking" class="d-block w-100" alt="...">
     
    </div>
    <div class="carousel-item">
    <h1 class="a" style="color:red"><i>Welcome To Spark Foundation <br> Bank</i></h1>
      <img src="https://source.unsplash.com/2400x1150/?nature" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <h1  class="a" style="color:red"><i>Welcome To Spark Foundation<br>  Bank</i></h1>
      <img src="https://source.unsplash.com/2400x1150/?bank"class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
<h1> All Facilities </h1>

<div id="card">
  <div  class="card" style="width: 18rem;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcACA9UI1ZicE34gg9lPKCRQeQIhC9pE4utg&usqp=CAU" class="card-img-top" id="c1" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">view your all customers</p>
      <a href="/Aakash/banking_system.php/customer.php" class="btn btn-primary">View Customer</a>
    </div>
  </div>
  <div  class="card" style="width: 18rem;">
    <img src="data:image/jpeg;base64,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" class="card-img-top" id="c2" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">send money to  your friend</p>
      <a href="/Aakash/banking_system.php/transcation.php?%20id=2" class="btn btn-primary">Send Money</a>
    </div>
  </div>
  <div  class="card" style="width: 18rem;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzSbtq6wUDhxR3I1rZAsJkz7-ZVYfomywhzTvMMoCxmV4E2ZdR3XlP2UUhhkc6iamDRZk&usqp=CAU" class="card-img-top" id="c2" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">View Transcation</p>
      <a href="/Aakash/banking_system.php/transcation_history.php" class="btn btn-primary">Transcation History</a>
    </div>
  </div>
</div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="last">
<?php
include "footer.php";
?>
</div>
</body>
</html>


