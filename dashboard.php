<?php
session_start();

if(isset($_SESSION["login"])){
    if(!$_SESSION["NAMA"] == ""){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Data Matkul</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Data Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Data User</a>
        </li>
      </ul>
        <a href="?act=logout"><button class="btn btn-danger me-2" type="submit">Logout</button></a>
    </div>
  </div>
</nav>


</body>
</html>

<?php
    }else{
        header("location: login.php");
    }
}else{
    header("location: login.php");
    }
?>