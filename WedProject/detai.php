<?php


include("connection.php");

$query = "SELECT * FROM home WHERE id";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
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
        /* styles.css */

table {
    width: 100%;
}

/* Set font family and size for table headers */
th {
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    background-color: #f2f2f2;
    padding: 10px; /* Increased padding for better readability */
}

/* Set font family and size for table cells */
td {
    font-family: Arial, sans-serif;
    font-size: 14px;
    padding: 8px; /* Increased padding for better readability */
}

/* Style for alternating row colors */
tr:nth-child(even) {
    background-color: #f9f9f9; /* Lighter gray background for even rows */
}

/* Style for hover effect on rows */
tr:hover {
    background-color: orchid; /* Darker gray background on hover */
    color: black; /* White text color on hover */
}

/* Style for action links */
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
    height: 520px; /* Should be removed. Only for demonstration */
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
    height: 250px;
    width: 200%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

h2{
    padding: 10px;
    background-color: purple;
    color: black;
    font-weight: bolder;
text-align: center  ;
}

    </style>
</head>
<body>
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

<h1> City Scape Realty</h1>
<h2><?php echo $row['id']?> Detail of House</h2>

<div>
    <div class="pic" style="width:25%; float:left;">
        <img src="images/<?php echo $row['file']?>" alt="" >
    </div>
    <div class="trailer" style="width:75%; float:left;">
        <iframe src="<?php echo $row['trailer']?>"
          width="1300" height="400"  frameborder="0"></iframe>
    </div>
    
</div>
    
    <table width=100%>
        <tr>
            <th>Name</th>
            <th><?php echo $row['name']?></th>
        </tr>

        <tr>
            <th>Area Name</th>
            <th><?php echo $row['areaname']?></th>
        </tr>

        <tr>
            <th>BHK</th>
            <th><?php echo $row['bhk']?></th>
        </tr>

        <tr>
            <th>No of Members</th>
            <th><?php echo $row['noofmembers']?></th>
        </tr>

        <tr>
            <th>No of Rooms</th>
            <th><?php echo $row['noofrooms']?></th>
        </tr>

        <tr>
            <th>Rent</th>
            <th><?php echo $row['rent']?></th>
        </tr>

        <tr></tr>

<td colspan=2>
    <a href="detail.php" style="padding:10px; background-color:green;color:white;text-decoration:none;">Back To Home</a>

</td>    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>                             