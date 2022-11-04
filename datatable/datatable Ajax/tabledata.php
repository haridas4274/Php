<?php 
include "config.php";

print_r($_POST);
foreach($_POST['columns'] as $col_data){
    $sql_col[]=($col_data['data']);
}
$col_str=implode(', ',$sql_col);
  
$draw=$_POST['draw'];
$start=$_POST['start'];
$end=$_POST['length'];
$tbl=$_POST['table'];
$search=$_POST['search']['value'];

foreach($sql_col as $cols){
$search_assgn=$cols."LIKE '%".$search."%'";
}
$search_assgn=implode('OR',$search_assgn);

$sql="SELECT $col_str FROM $tbl WHERE $search_assgn";
// echo $sql;
$result=$db->query($sql);

$search_count=$result->num_rows;



$sql="SELECT $col_str FROM $tbl WHERE $search_assgn LIMIT $start,$end";
$result=$db->query($sql);

while($row=$result->fetch_assoc()){
$final_data[]=$row;
}
$jsn_data=array(
    "draw"=>intval($draw),
    "recordsTotal"=>intval($search_count),
    "recordsFillterd"=>intval($search_count),
    "data"=>$final_data
);


echo json_encode($jsn_data);

?>