<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Test</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <ul>
        <li><a href="{{ route('Medewerkers.index')}}">Medewerkers</a></li>
        <li><a href="{{ route('Bedrijvens.index')}}" >Bedrijven</a></li>
    </ul>
</head>
<body>
<div class="container">
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>

