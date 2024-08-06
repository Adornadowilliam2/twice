<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Handler</title>
    <link rel="shortcut icon" href="media/survey.svg" type="image/x-icon">
</head>
<body style="display:flex;justify-content:center; align-items:center; height: 100vh; padding: 0; margin:0; flex-direction: column">
    <h1 style="text-align:center">Create Handler Page</h1>

    <?php
        include_once("db-kpop.php");

        $name = trim($_POST["input_name"]);
        $groupname= trim($_POST["input_groupname"]);
        $age = trim($_POST["input_age"]);
        $thumbnail = trim($_POST["input_thumbnail"]);
        if ($name == "" && $groupname == "" && $age >= 0 && $thumbnail == "") {
            echo "<h2 style='color: maroon;'> Missing Field! Invalid Data! </h2>";

        }else{
            $checkQuery = "SELECT * FROM users WHERE name = '$name'";
            $checkResult = mysqli_query($connection, $checkQuery);
            
            if (mysqli_num_rows($checkResult) > 0) {
                echo "
            <div>
            <h2 style='color:red'> Duplicate record, please try again! &#128513 </h2>
            <a href='create-form.php' style='text-decoration:none'><button style='background:#569cd6; color: white; border: 2px solid black; margin: auto; display: block;padding: 5px; border-radius: 5px; cursor: pointer'>Back To Create Form</button></a>
            </div>
            ";
            } else {


            $createQuery = "INSERT INTO users(name, groupname, age, thumbnail) VALUES ('$name','$groupname', '$age', '$thumbnail')";

            $execQuery = mysqli_query($connection, $createQuery);
        
            if($execQuery){
                echo "
    
                    <div>
                        <h2 style='color:green'> Created Successfully </h2>
                        <a href='index.php' style='text-decoration:none'><button style='background:#569cd6; color: white; border: 2px solid black; margin: auto; display: block;padding: 5px; border-radius: 5px; cursor: pointer'>Back To Index</button></a>
                    </div>
     
                ";
            }

        }
    }

        

    ?>
</body>
</html>