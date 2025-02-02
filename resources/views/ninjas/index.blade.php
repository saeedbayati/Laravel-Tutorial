<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ninjas networks|home</title>


</head>
<body>
<h2>Currently Available Ninjas</h2>

<p>{{ $greeting }}</p>

<ul>

    @foreach($ninjas as $ninja)
        <li>
            <p>{{$ninja['name']}}</p>
            <a href="/ninjas/{{$ninja['id']}}">View Details</a>
        </li>


    @endforeach

</ul>

</body>
</html>
