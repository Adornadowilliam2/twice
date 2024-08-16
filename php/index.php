
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpop Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@200..900&family=Permanent+Marker&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: "Noto Serif KR", serif;
            font-weight: bold;
            padding: 0;
            margin:0;
        }

        .header{
            background: darkgray;
            margin-top: 10px;
            border-top: 5px solid black;
            padding: 5px
        }

        .thumbnail-container {
            position: relative;
            width: 100px;
            height: 100px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .thumbnail-img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .thumbnail-container:hover .thumbnail-img {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Kpop Database</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="create-form.php">Add Idol Name</a></li>
    </ul>
  </div>
</nav>
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
    $groupname = $fetch["groupname"];
    $country = $fetch["country"];
    $age = $fetch["age"];
    $thumbnail = $fetch["thumbnail"];
    echo"
    <div class='header'>
        <p>Id: $id </p>
        <div class='thumbnail-container'>
            <img src='$thumbnail' alt='Thumbnail' class='thumbnail-img'/>
        </div>
        <h1>Idol name:<b style='color:yellow'> &#9734 $name </b> </h1>
    </div>
        <h2>Group name:<b> $groupname </b> </h2>
        <h3>Country:<b> $country </b> </h3>
        <h4>Age:<b> $age </b> </h4>
        <h5>Thumbnail:<a href='$thumbnail' target='_blank'> $thumbnail </a> </h5>
        <div>
            <a href='edit-form.php?id=$id' ><button style='background:orangered;color:white;border-radius: 10px; border: 2px solid black; padding: 5px 10px '>Edit</button></a>
            <a href='delete-form.php?id=$id'><button style='background:red;color: white; border-radius: 10px; border: 2px solid black; padding: 5px 10px '>Delete</button></a>
        </div>
    ";
}
?>


</body>
</html>