@extends('app')

@section('content')
    <form method="post" action="{{ route('mederwerkers.store') }}">
        <div class="form-group">
            @csrf
            <label>Naam</label>
            <input type="text" class="form-control" name="VoorNaam"/>
        </div>
        <div class="form-group">
            <label>Adres</label>
            <input type="text" class="form-control" name="AchterNaam"/>
        </div>
        <div class="form-group">
            <label>PostCode</label>
            <input type="text" class="form-control" name=Bedrijf"/>
        </div>
        <div class="form-group">
            <label>Woonplaats</label>
            <input type="text" class="form-control" name="Telefoon"/>
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="Email"/>
        </div>

        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>
@endsection
