<?php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Atlantida</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link href="dataTables.bootstrap5.min.css" rel="stylesheet" >
  
<!--  https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css -->
  
</head>
<body>
<div class="container">
  <?php 
  include('contratos/config.php');
  require("app.component.php");
  require("rechazados.component.php");
  ?>
</div>

<script>
$(document).ready( function () {
    //$('#myTable').DataTable();
	new DataTable('#example');
} );
</script>

	<script src="jquery-3.7.0.js" ></script>
	<script src="jquery.dataTables.min.js" ></script>
	<script src="dataTables.bootstrap5.min.js" ></script>
	
  <script src="bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
