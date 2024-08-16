
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Form</title>
</head>
<body style="display:flex;justify-content:center; align-items:center; height: 100vh; padding: 0; margin:0">
    <fieldset>
    <?php
    include("db-kpop.php");
        $id = $_GET["id"];
        $retrieve = "SELECT * FROM users WHERE id=$id";
        $execute = mysqli_query($connection, $retrieve);

        $fetch = mysqli_fetch_assoc($execute);
        $name = $fetch["name"];

    ?>
        <div>
            <h2 style="color:red">Do you want to delete this question no.  <?php echo $id ?>?</h2>
            <h3><?php echo $name ?></h3>
            <form action="delete-handler.php" method="post">
                <input type="submit" name="btn-submit" value="Yes" style="background:red; border: 2px solid black; border-radius: 10px; color:white; padding: 5px 10px"> 
                <input type="submit" name="btn-submit" value="No" style="background: green; border: 2px solid black; border-radius: 10px; color:white; padding: 5px 10px">
                <input type="hidden" name="delete-id" value="<?php echo $id ?>">
            </form>
    </fieldset>
</body>
</html>



