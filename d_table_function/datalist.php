<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class="container">

<?php 
include "functions.php";
$page=1;
$limit = 1 -10;
// $url = "http://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]";
$data = get_data("tablelist", "*", null, "ID ASC", "$start, $limit");
// $total_count =  get_count("tablelist", "*", null);
?>

 <h1>Total Records:</h1> 

<table class="table">
    <tr>
        <td>Sno</td>
        <td>Name</td>
        <td>Price</td>
    </tr>
  


</table> 


<!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->

</div>
</body>
</html>