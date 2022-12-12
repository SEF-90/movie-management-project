<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "stores";
  
  #Initial setup, connects to the xampp server.
  $conn = mysqli_connect($servername, $username, $password, $db);
  
  if (!$conn) {
    echo "connection not successful";
  } else {
    echo "connection successful";
  }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
  <button type="button" class="btn btn-primary">primary button</button>
  <p>does this work?</p>
  <p>number fifty</p>
  <p>YES</p>
  <p>något random</p>
  <p>testttttt</p>
</body>
</html>