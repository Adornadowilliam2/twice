<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: Arial, sans-serif;
        }

       
        nav {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        nav h1 {
            margin-bottom: 10px;
            font-size: 2em;
        }

        .add-btn {
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            display: inline-block;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .add-btn:hover {
            background-color: #218838;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .add-btn:active {
            background-color: #1e7e34;
        }

        .success-message {
            margin-top: 10px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            display: inline-block;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        th {
            background: gray;
        }

        .edit-btn, .delete-btn {
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            color: #fff;
        }

        .edit-btn {
            background: orangered;
     
        }

        .delete-btn {
            background: red;
     
        }

        img.thumbnail {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <nav>
    <h1>User List</h1>
    <a href="{{ route('register.form') }}" class="add-btn">Register</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    </nav>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Group Name</th>
                <th>Country</th>
                <th>Age</th>
                <th>Thumbnail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->groupname }}</td>
                    <td>{{ $user->country }}</td>
                    <td>{{ $user->age }}</td>
                    <td><img src="{{ $user->thumbnail }}" alt="Thumbnail" class="thumbnail" title="{{ $user->thumbnail }}"></td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="edit-btn">Edit</a>
                        <a href="{{ route('users.delete', $user->id) }}" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
