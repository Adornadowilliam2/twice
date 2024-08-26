<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: max-content;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 20px;
            color: #333;
        }

        label {
            margin: 5px 0;
            display: block;
        }

        input {
            font-size: 15px;
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin: 5px 0;
            font-size: 12px;
        }

        .input-error {
            border: 1px solid red;
            background-color: #fdd;
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
    <form action="{{ route('register') }}" method="POST">
        <h1>Register</h1>
        @csrf
        <div>
            <label for="name">Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ old('name') }}" 
                placeholder="Username" 
                class="{{ $errors->has('name') ? 'input-error' : '' }}"
                required
            >
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="groupname">Group Name:</label>
            <input 
                type="text" 
                id="groupname" 
                name="groupname" 
                value="{{ old('groupname') }}" 
                placeholder="Group Name" 
                class="{{ $errors->has('groupname') ? 'input-error' : '' }}"
                required
            >
            @error('groupname')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="country">Country:</label>
            <input 
                type="text" 
                id="country" 
                name="country" 
                value="{{ old('country') }}" 
                placeholder="Country" 
                class="{{ $errors->has('country') ? 'input-error' : '' }}"
                required
            >
            @error('country')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="age">Age:</label>
            <input 
                type="number" 
                id="age" 
                name="age" 
                value="{{ old('age') }}" 
                placeholder="Age" 
                class="{{ $errors->has('age') ? 'input-error' : '' }}"
                required
            >
            @error('age')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="thumbnail">Thumbnail:</label>
            <input 
                type="text" 
                id="thumbnail" 
                name="thumbnail" 
                value="{{ old('thumbnail') }}" 
                placeholder="Thumbnail" 
                class="{{ $errors->has('thumbnail') ? 'input-error' : '' }}"
                required
            >
            @error('thumbnail')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>
