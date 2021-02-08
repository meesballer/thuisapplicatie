@extends('app')

@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <form method="post" action="{{ route('Medewerkers.store') }}">
        <div class="form-group">
            @csrf
            <label>Voornaam</label>
            <input type="text" class="form-control" name="VoorNaam"/>
        </div>
        <div class="form-group">
            <label>Achternaam</label>
            <input type="text" class="form-control" name="AchterNaam"/>
        </div>
        <div class="form-group">
            <label>Bedrijf</label>
            <input type="text" class="form-control" name=Bedrijf"/>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="Email"/>
        </div>
        <div class="form-group">
            <label>Telefoon</label>
            <input type="text" class="form-control" name="Telefoon"/>
        </div>

        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>
@endsection
