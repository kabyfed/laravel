<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table style ="border: 2px solid black">
        <tr>
            <th>id</th>
            <th>Заголовок</th>
            <th>Описание</th>
        </tr>
        @foreach ($posts as $post)
            <tr style="text-align: center">
                <td>{{ $post->id }}</td>
                <td><a href="{{ route('show', ['id' => $post->id]) }}">{{ $post->title }}</a></td>
                <td>{{ $post->desc }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
