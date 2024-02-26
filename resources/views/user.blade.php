<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Задание 13.1 пункт 2 --}}
    <table style ="border: 2px solid black">
        <tr>
            <th>id</th>
            <th>логин</th>
            <th>пароль</th>
            <th>email</th>
        </tr>
        @foreach ($user as $user)
        <tr style="text-align: center">
            <td>{{ $user->id }}</td>
            <td>{{ $user->login }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
