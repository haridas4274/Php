<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static data table</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>
<body>
    
  <table id="tableName">
<thead>
  <tr>
  <th>header</th>
  <th>header</th>
  <th>header</th>
  <th>header</th>
  <th>header</th>
</tr>
</thead>

<tbody>

</table>

<!-- jquery must insertable -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
  <!-- script -->
  <script>
    $(document).ready(function(){
      $('#tableName').DataTable(); //this is datatable plugin template
    });
  </script>
</body>
</html>