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
            <th>Имя</th>
            <th>Дата рождения</th>
            <th>Должность</th>
            <th>Зарплата</th>
        </tr>
        @foreach ($employee as $employee)
        <tr style="text-align: center">
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->birthday }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
