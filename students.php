<?php
  require ('connection.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Computer Students</h2>     
<div class="pull-right">
  <a href="student.php" class="btn btn-success">Add Student</a>
</div>
<br/>
<br/>

  <table class="table table-bordered">
    <thead>
      <tr>
      <th>No</th>				
        <th>Firstname</th>
        <th>Mobile</th>
        <th>Action</th>
     	
      </tr>
    </thead>
    <tbody>

    <?php
				$query = "SELECT * FROM students ORDER BY id" ;
				$result = mysqli_query($conn,$query);
				$count = 1;
				while($row = mysqli_fetch_array($result))
				{ 
                   echo "<tr>";
                   echo "<td>". $count . "</td>";
                   echo "<td>". $row['name'] ."</td>";
                   echo "<td>". $row['mobile'] ."</td>";
                   echo "<td><a href='student.php?id=" . $row['id'] . "&Mode=edit'>Edit</a> <a onclick='return confirm(\"Sure to delete?\");' href='student.php?id=" . $row['id'] . "&Mode=delete'>Delete</a></td></td>";
                  
                  echo "</tr>";     
                $count++;					
                }
?>
    </tbody>
  </table>
</div>

</body>
</html>