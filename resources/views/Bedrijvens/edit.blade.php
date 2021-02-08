@extends('app')

@section('content')
    <form method="post" action="{{ route('bedrijvens.update', $bedrijf->id) }}">
        @method('PATCH')
        <div class="form-group">
            @csrf
            <label>Naam</label>
            <input type="text" class="form-control" name="VoorNaam" value="{{$bedrijf->VoorNaam}}"/>
        </div>
        <div class="form-group">
            <label>adres</label>
            <input type="text" class="form-control" name="AchterNaam" value="{{$bedrijf->AchterNaam}}"/>
        </div>
        <div class="form-group">
            <label>postcode</label>
            <input type="text" class="form-control" name="Bedrijf"value="{{$bedrijf->Bedrijf}}"/>
        </div>
        <div class="form-group">
            <label>woonplaats</label>
            <input type="text" class="form-control" name="Email" value="{{$bedrijf->Email}}"/>
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="text" class="form-control" name="Telefoon" value="{{$bedrijf->Telefoon}}"/>
        </div>
        <button type="submit" class="btn btn-primary">Wijzigen</button>
    </form>
@endsection
