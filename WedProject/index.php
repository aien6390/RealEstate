<?php
include("connection.php");

$query = "SELECT * FROM home";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"> <!-- Link to external CSS file -->
    <style>
      

table {
    width: 100%;
}


th {
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    background-color: #f2f2f2; 
    padding: 10px; 
}

td {
    font-family: Arial, sans-serif;
    font-size: 14px;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #f9f9f9; 
}

tr:hover {
    background-color: orchid; 
    color: #fff; 
}


.action-link {
    display: inline-block;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    cursor: pointer;
}

.delete-link {
    background-color: #ff6347; 
    color: #fff; 
}

.update-link {
    background-color: #1e90ff; /* Dodger blue */
    color: #fff; /* White text color */
} 

* {
    box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
    height: 520px; 
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
}
img{
    height: 350px;
    
    
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}



    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1>RealEstate</h1>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="img/ban1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block ">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/ban2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/ban3.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block  ">
        <h5></h5>
        <p> </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="row">
    <?php
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="column" style="background-color:#aaa;">
        <div class="card">
          <a href="detai.php?delId=<?php echo $row['id'];?>">
           <img src="images/<?php echo $row['file'];?>" alt="Avatar" style="width:100%">
          </a>
                <div class="container">
                  <h4><b><?php echo $row['name'];?></b></h4>   
                  <p><?php echo $row['bhk'].' - '.$row['rent'];?></p> 
                </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
