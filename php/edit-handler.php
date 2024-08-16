<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit handler</title>
</head>
<body style="display:flex;justify-content:center; align-items:center; height: 100vh; padding: 0; margin:0; flex-direction: column">
<?php
    include("db-kpop.php");

    $id = $_POST["edit-id"];
    $name = $_POST["input_name"];
    $groupname = $_POST["input_groupname"];
    $age = $_POST["input_age"];
    $thumbnail = $_POST["input_thumbnail"];
    $name = trim($name);
    $groupname = trim($groupname);
    $age = trim($age);
    $thumbnail = trim($thumbnail);

    if ($name == "" && $groupname == "" && $age >= 0 && $thumbnail == "") {
    
        echo "
            <div class='form-succeed'>
                <h1>Output</h1>
                <h2 style='color:red'> Invalid, please complete the missing field <h2>
                <a href='edit-form.php?id=$id'><button style='background: #22a6d1; border: 2px solid black; padding: 5px 10px; color: white; border-radius: 10px'>Back To Edit Form</button></a>
            </div>";
    } else {
        $update = "UPDATE users SET name='$name', groupname = '$groupname', age = '$age' , thumbnail = '$thumbnail' WHERE id=$id";
        $execute = mysqli_query($connection, $update);
        if ($execute) {
            echo "
                <div class='form-succeed'>
                    <h1>Output</h1>
                    <h2 style='color: green'>Updated Successfully!!...</h2>
                    <a href='index.php'><button style='background: #22a6d1; border: 2px solid black; padding: 5px 10px; color: white; border-radius: 10px'>Go back</button></a>
                </div>";
        }
    }
?>
</body>
</html>
