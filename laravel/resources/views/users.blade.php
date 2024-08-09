<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>
<body>
    <h1>Users List</h1>

    @if($users->isEmpty())
        <p>No users found.</p>
    @else
        <ul>
            @foreach($users as $user)
                <li>
                    {{ $user->name }} - {{ $user->groupname }} - {{ $user->country }} - {{ $user->age }}
                    <img src="{{ $user->thumbnail }}" alt="Thumbnail" width="50">
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
