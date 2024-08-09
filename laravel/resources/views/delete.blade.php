<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <h1>Delete User</h1>

    <form action="{{ route('user.delete') }}" method="POST">
        @csrf
        @method('DELETE')

        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" required>
        <br>

        <button type="submit">Delete</button>
    </form>
</body>
</html>
