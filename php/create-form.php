<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/survey.svg" type="image/x-icon">
    <title>Add Idol</title>
</head>
<body style="display:flex;justify-content:center; align-items:center; height: 100vh; padding: 0; margin:0">
<fieldset >
        <form action="create-handler.php" method="post">
            <h1>Add Idol</h1>
            <div>
                <label for="input_name">Idol Name: </label><br>
                <input type="text" name="input_name" id="input_name" placeholder="Idolname">
            </div>
            <div>
                <label for="input_groupname">Group name: </label><br>
                <input type="text" name="input_groupname" id="input_groupname" placeholder="Groupname">
            </div>
            <div>
                <label for="input_age">Age: </label><br>
                <input type="text" name="input_age" id="input_age" placeholder="Age">
            </div>
            <div>
                <label for="input_thumbnail">Thumbnail: </label><br>
                <input type="text" name="input_thumbnail" id="input_thumbnail" placeholder="Thumbnail">
            </div>
            <div>
                <input type="submit" value="Submit" style='background: green; border: 2px solid black;margin-top: 10px; padding: 5px 10px; border-radius: 10px; color: white'>
                <a href="index.php" style='background: #007bff; text-decoration:none; border: 2px solid black;margin-top: 10px; padding: 5px 10px; border-radius: 10px; color: white'>Cancel</a>
            </div>
        </form>
</fieldset>

</body>
</html>