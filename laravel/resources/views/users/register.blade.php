<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <label>Group Name:</label>
        <input type="text" name="groupname" value="{{ old('groupname') }}">
        @error('groupname')
            <div>{{ $message }}</div>
        @enderror

        <label>Country:</label>
        <input type="text" name="country" value="{{ old('country') }}">
        @error('country')
            <div>{{ $message }}</div>
        @enderror

        <label>Age:</label>
        <input type="number" name="age" value="{{ old('age') }}">
        @error('age')
            <div>{{ $message }}</div>
        @enderror

        <label>Thumbnail:</label>
        <input type="text" name="thumbnail" value="{{ old('thumbnail') }}">
        @error('thumbnail')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Register</button>
    </form>
</body>
</html>
