<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete handler</title>
</head>
<body style="display:flex;justify-content:center; align-items:center; height: 100vh; padding: 0; margin:0; flex-direction: column">
<?php
    include("db-kpop.php");
    $id = $_POST["delete-id"];

    $response = $_POST["btn-submit"];

    if ($response == "Yes") {
            $delete = "DELETE FROM users WHERE id = $id";
            $execute = mysqli_query($connection, $delete);

            if ($execute) {
                echo "<h2 style='color: green'>Deleted Successfully</h2>";
            } else {
                echo "<h2 style='color: red'>Delete Failed</h2>";
            }
    } else {
        header("location: index.php");
        exit();
    }

    echo "<a href='index.php'><button style='background: #22a6d1; border: 2px solid black; padding: 5px 10px; color: white; border-radius: 10px'>Go back</button></a>"
?>
</body>
</html>