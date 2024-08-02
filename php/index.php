
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpop Database</title>
</head>
<body>
   
<?php
include("db-kpop.php");
$retrieve = "SELECT * FROM users";
$execute = mysqli_query($connection, $retrieve);

/**
 * if($execute){
 *   echo "Success to retrieve";
 *  }
 */


while($fetch = mysqli_fetch_assoc($execute)){
    $id = $fetch["id"];
    $name = $fetch["name"];

    echo"
    <fieldset>
        <p>Id: $id </p>
        <h1><b style='color:darkgray;'>Name:</b> $name </h1>
        <div>
            <a href='edit-form.php?id=$id' ><button style='background:orangered;color:white;border-radius: 10px; border: 2px solid black; padding: 5px 10px '>Edit</button></a>
            <a href='delete-form.php?id=$id'><button style='background:red;color: white; border-radius: 10px; border: 2px solid black; padding: 5px 10px '>Delete</button></a>
        </div>
    </fieldset>
    ";
}
?>


</body>
</html>