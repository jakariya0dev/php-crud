<?php 

  $conn = mysqli_connect("localhost","root","","jsths");

  $sql = "SELECT * FROM teachers";

  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

  // echo "<pre>";
  // var_dump($result);
  // echo "</pre>";

  // while ($row = mysqli_fetch_assoc($result)) {   
    
  //   echo "id: ".$row["id"] . "<br>";
  //   echo "Name: ".$row["name"] . "<br>";
  //   echo "Email: ".$row["email"] . "<br>";
  //   echo "Phone: ".$row["phone"] . "<br>";
  //   echo "Blood Group: ".$row["blood_group"] . "<br>";
  //   echo "<hr>";

  // }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <h1 class="text-center my-4 text-bg-primary py-2">All Teacher List</h1>

        <a href="add-teacher.php" class="btn btn-primary mb-2">Add New Teacher</a>

        <table class="table">
        <thead>
             <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Blood Group</th>
             </tr>
        </thead>
        <tbody>


            <?php 
            
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['phone']}</td>";
                echo "<td>{$row['blood_group']}</td>";
                echo "</tr>";
             }
            
            ?>
            
        </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>