<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h1> {{ $title }} </h1>
    <p> {{ $content }} </p>

    {{-- @foreach ($links as $link)
        <a href="{{$link['href']}}"> {{$link['text']}} </a> <br>
    @endforeach --}}

    <table style ="border: 2px solid black">
        <tr>
            <th>№ п\п</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Статус</th>
        </tr>
        @foreach ($users as $key => $user)
        <tr style="
                    @if ($user['banned'])
                        color:red;
                    @else
                        color:green;
                    @endif ">
            <td>{{ $key+1 }}</td>
            <td>{{ $user['name']}}</td>
            <td>{{ $user['surname']}}</td>
            <td>
                @if ($user['banned'])
                    забанен
                @else
                    активен
                @endif
            </td>
        </tr>

        @endforeach
    </table>
</body>
</html>
