@extends('app')

@section('content')
    <form method="post" action="{{ route('Medewerkers.update', $medewerker->id) }}">
        @method('PATCH')
        <div class="form-group">
            @csrf
            <label>Voornaam</label>
            <input type="text" class="form-control" name="VoorNaam" value="{{$medewerker->VoorNaam}}"/>
        </div>
        <div class="form-group">
            <label>Achternaam</label>
            <input type="text" class="form-control" name="AchterNaam" value="{{$medewerker->AchterNaam}}"/>
        </div>
        <div class="form-group">
            <label>Bedrijf</label>
            <select name="bedrijfs_id" id="bedrijfs_id" class="form-control">
                <option value="{{ -1 }}">{{ 'Kies een bedrijf' }}</option>
                @foreach($bedrijven as $bedrijf)
                    <option value="{{$bedrijf->id}}">{{$bedrijf->Naam}}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="Email" value="{{$medewerker->Email}}"/>
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="number" class="form-control" name="Telefoon" value="{{$medewerker->Telefoon}}"/>
        </div>
        <button type="submit" class="btn btn-primary">Wijzigen</button>
        <form action="{{ route('Medewerkers.destroy', $medewerker->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Verwijder</button>
        </form>
    </form>
@endsection
