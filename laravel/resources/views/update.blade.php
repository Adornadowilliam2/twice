<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h1>Update User Information</h1>

    <form action="{{ route('user.update') }}" method="POST">
        @csrf
        @method('PUT')

        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" required>
        <br>

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

        <button type="submit">Update</button>
    </form>
</body>
</html>
