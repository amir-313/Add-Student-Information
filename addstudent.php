<?php 
require('connection.php');

$id=$_POST['id'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];


if($id == 0) 
{
    $query = "INSERT INTO students(name,mobile) VALUES('" . $name ."','".$mobile."')";
    mysqli_query($conn,$query);
}
else
{
    $query = "UPDATE students SET name = '" . $name . "', mobile = '" . $mobile . "' WHERE id = " . $id;
    mysqli_query($conn,$query);
}

header("Location:students.php");
?>
