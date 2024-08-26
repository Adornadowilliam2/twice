<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            width: 100%;
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            font-size: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .form-group .input-error {
            border-color: red;
            background-color: #fdd;
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        span{
            position:absolute;
            top: 0;
            right: 0;
            padding: 10px;
            font-size: 25px;
        }

        a{
            color :black;
        }
    </style>
</head>
<body>
    <a href="{{ route('users.list') }}"><span>x</span></a>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
    <h1>Edit User</h1>
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ old('name', $user->name) }}" 
                class="{{ $errors->has('name') ? 'input-error' : '' }}"
            >
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="groupname">Group Name:</label>
            <input 
                type="text" 
                id="groupname" 
                name="groupname" 
                value="{{ old('groupname', $user->groupname) }}" 
                class="{{ $errors->has('groupname') ? 'input-error' : '' }}"
            >
            @error('groupname')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="country">Country:</label>
            <input 
                type="text" 
                id="country" 
                name="country" 
                value="{{ old('country', $user->country) }}" 
                class="{{ $errors->has('country') ? 'input-error' : '' }}"
            >
            @error('country')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input 
                type="number" 
                id="age" 
                name="age" 
                value="{{ old('age', $user->age) }}" 
                class="{{ $errors->has('age') ? 'input-error' : '' }}"
            >
            @error('age')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="thumbnail">Thumbnail:</label>
            <input 
                type="text" 
                id="thumbnail" 
                name="thumbnail" 
                value="{{ old('thumbnail', $user->thumbnail) }}" 
                class="{{ $errors->has('thumbnail') ? 'input-error' : '' }}"
            >
            @error('thumbnail')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
