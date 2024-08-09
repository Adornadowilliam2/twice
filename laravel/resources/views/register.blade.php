<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>
    <h1>Register New User</h1>

    <form action="{{ route('user.register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="groupname">Group Name:</label>
        <input type="text" id="groupname" name="groupname" required>
        <br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required>
        <br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>

        <label for="thumbnail">Thumbnail URL:</label>
        <input type="text" id="thumbnail" name="thumbnail" required>
        <br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
