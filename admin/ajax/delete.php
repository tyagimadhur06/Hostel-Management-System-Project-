<?php
include('connection.php');

$id = $_POST['id'];
$query = "DELETE from stu_details WHERE id='".$id. "'";
$stmt=$db->prepare($query);
$stmt->execute();

?>