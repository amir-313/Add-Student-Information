<?php
	require ('connection.php');
	$id= 0;
	$name = "";
	$mobile = "";

	
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		if($_GET['Mode'] == "edit")
		{
			$query = "SELECT * FROM students WHERE id = " . $id;
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($result);
			$name = $row['name'];
	 		$mobile = $row['mobile'];
		}
		else
		{
			$query = "DELETE FROM students WHERE id = " . $id;
			mysqli_query($conn,$query);

			header("Location:students.php");
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="width:400px;">
  <h2>Insert Student Data</h2>
  <form  method="POST" action="addstudent.php">
  <div class="form-group">
      <label for="usr">ID</label>
      <input type="text" class="form-control"  value="<?php echo $id; ?>" name="id">
    </div>

    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Phone</label>
      <input type="number" class="form-control" value="<?php echo $mobile; ?>" name="mobile">
    </div>
    <input type="submit" class="btn btn-info" value="Save">
  </form>
</div>

</body>
</html>
