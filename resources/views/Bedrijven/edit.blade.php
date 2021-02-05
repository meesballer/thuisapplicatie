@extends('app')

@section('content')
    <form method="post" action="{{ route('medewerkers.update', $medewerker->id) }}">
        @method('PATCH')
        <div class="form-group">
            @csrf
            <label>Naam</label>
            <input type="text" class="form-control" name="VoorNaam" value="{{$medewerker->VoorNaam}}"/>
        </div>
        <div class="form-group">
            <label>adres</label>
            <input type="text" class="form-control" name="AchterNaam" value="{{$medewerker->AchterNaam}}"/>
        </div>
        <div class="form-group">
            <label>postcode</label>
            <input type="text" class="form-control" name="Bedrijf"value="{{$medewerker->Bedrijf}}"/>
        </div>
        <div class="form-group">
            <label>woonplaats</label>
            <input type="text" class="form-control" name="Email" value="{{$medewerker->Email}}"/>
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="text" class="form-control" name="Telefoon" value="{{$medewerker->Telefoon}}"/>
        </div>
        <button type="submit" class="btn btn-primary">Wijzigen</button>
    </form>
@endsection
