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
    <style>
           .last{
    position:relative;
    top:400px;
}
.form{
  position: relative;
  top: 100px;
  left:500px;
 width:500px;


}
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="form">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>
  <button type="submit" class="btn btn-primary my-2">Submit</button>
</form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="last">
    <?php
    include "footer.php";
    ?>
    </div>
    </body>
    </html>
