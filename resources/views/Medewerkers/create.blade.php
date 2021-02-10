@extends('app')

@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <form method="post" action="{{ route('Medewerkers.store') }}">
        <div class="form-group">
            @csrf
            <label>Voornaam</label>
            <input type="text" class="form-control" name="VoorNaam" required/>

        </div>
        <div class="form-group">
            <label>Achternaam</label>
            <input type="text" class="form-control" name="AchterNaam" required/>
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
            <input type="email" class="form-control" name="Email" required/>
        </div>
        <div class="form-group">
            <label>Telefoon</label>
            <input type="tel" class="form-control" name="Telefoon" minlength="10" maxlength="13" required/>
        </div>

        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>
@endsection
