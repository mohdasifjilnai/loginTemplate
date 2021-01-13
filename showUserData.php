<?php
   include_once("connection.php");
   $sql = "SELECT  * FROM login";
    $result = $mysqli->query($sql);
    /*print_r($result);
    echo "<br/>";*/
/*if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_array()) {
    echo "id: " . $row["id"]. "Name: " . $row["name"]. "Email " . $row["email"]."Mobile".$row["mobile"]. "<br>";
  }
} else {
  echo "0 results";
}
$mysqli->close();*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">User Data <span class="caret"></span></a>
          <ul class="dropdown-menu userDataClass" id="userId1">
          	<?php
          	  if ($result->num_rows > 0) {
              while($row = $result->fetch_array()) {
          	?>
            <li class="btn" id='<?=$row["id"]?>'<a href="#"><?=$row["name"];?></a></li>
            <?php } 
       		 }
       		  else {
  					echo "0 results";
			}
         $mysqli->close();
          ?>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <h3>Collapsible Navbar</h3>
  <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
</div>

</body>
<script type="text/javascript" src="script.js"></script>
</html>
