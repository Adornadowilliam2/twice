<?php
include("db-kpop.php");
$id = $_GET["id"];
$retrieve = "SELECT * FROM users WHERE id =$id";
$execute = mysqli_query($connection, $retrieve);

/**
 * if($execute){
 *  echo "sucess";
 * }
 */

$fetch = mysqli_fetch_assoc($execute);
$name = $fetch["name"];
$groupname = $fetch["groupname"];
$age = $fetch["age"];
$thumbnail = $fetch["thumbnail"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body style="display:flex;justify-content:center; align-items:center; height: 100vh; padding: 0; margin:0">
    <fieldset>
    <form action="edit-handler.php" method="post" style="padding: 5px">
        <div>
            <label for="input_name" style="font-weight: bold">Id no. <?php echo $id ?> <br>Please edit carefully &#128513 <br></label>
            <input type="text" name="input_name" id="input_name" value="<?php echo $name?>" style="margin-top: 10px"><br>
            <input type="text" name="input_groupname" id="input_groupname" value="<?php echo $groupname?>" style="margin-top: 10px"><br>
            <input type="text" name="input_age" id="input_age" value="<?php echo $age?>" style="margin-top: 10px"><br>
            <input type="text" name="input_thumbnail" id="input_thumbnail" value="<?php echo $thumbnail?>" style="margin-top: 10px"><br>
        </div>
        

        <div>
            <input type="submit" value="Sumit info" style='background: orangered; border: 2px solid black;margin-top: 10px; padding: 5px 10px; border-radius: 10px; color: white'>
            <input type="hidden" name="edit-id" value="<?php echo $id ?>">
        </div>
    
    </form>
    
    </fieldset>
</body>
</html>