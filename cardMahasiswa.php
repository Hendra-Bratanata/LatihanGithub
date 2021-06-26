

<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="w3.css">
    <title>Data Mahasiswa</title>
</head>
<body>
  
    
    <div   class="container">

    <nav class="navbar navbar-expand-sm bg-primary navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>


        <div class="row">
        <?php 
        $sql = mysqli_query($mysqli, "SELECT * FROM `mahasiswa` ");
       

        while($hasil = mysqli_fetch_array($sql)){
            echo "
            <div class='col-xs-1-12 m-2'>
            <div class='w3-card'>
              <div class='card-body'>
                <h3 class='card-title'>$hasil[nim]</h3>
                <p class='card-text'>$hasil[nama_mh]</p>
              </div>
            </div>
          </div>";
        }
        ?>

        </div>
        <!-- close row -->
    </div>
    <!-- close contener -->
    
    
        
</body>
</html>