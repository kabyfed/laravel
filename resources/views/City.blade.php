<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>cities</title>



    </head>
    <body>
        @foreach ($countries as $countries)
            <div>
                <h2>{{$countries->name}}</h2>
                <ul>
                    @foreach ($countries->cities as $city)
                        <li>{{$city->name .' ' . $city->population}}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </body>
</html>
