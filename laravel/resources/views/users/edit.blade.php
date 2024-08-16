<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <label>Group Name:</label>
        <input type="text" name="groupname" value="{{ old('groupname', $user->groupname) }}">
        @error('groupname')
            <div>{{ $message }}</div>
        @enderror

        <label>Country:</label>
        <input type="text" name="country" value="{{ old('country', $user->country) }}">
        @error('country')
            <div>{{ $message }}</div>
        @enderror

        <label>Age:</label>
        <input type="number" name="age" value="{{ old('age', $user->age) }}">
        @error('age')
            <div>{{ $message }}</div>
        @enderror

        <label>Thumbnail:</label>
        <input type="text" name="thumbnail" value="{{ old('thumbnail', $user->thumbnail) }}">
        @error('thumbnail')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Update</button>
    </form>
</body>
</html>
