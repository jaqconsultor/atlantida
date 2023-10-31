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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
  
<!--  https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css -->
  
</head>
<body>
<div class="container">
  <?php 
  include('contratos/config.php');
  require("src/app.component.php");
  require("src/recibidos.component.php");
  ?>
</div>

<script>
$(document).ready( function () {
    //$('#myTable').DataTable();
	new DataTable('#example');
} );
</script>

	<script src="https://code.jquery.com/jquery-3.7.0.js" ></script>
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" ></script>
	<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js" ></script>
	
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
