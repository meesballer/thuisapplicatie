@extends('app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <td>Voornaam</td>
            <td>Achternaam</td>
            <td>Bedrijf</td>
            <td>Email</td>
            <td>Telefoon</td>
            <td><a href="{{ route('Medewerkers.create')}}" class="btn btn-primary">Nieuwe Medewerker toevoegen</a></td>
        </tr>
        </thead>
        <tbody>
        @foreach($medewerkers as $medewerker)
            <tr>
                <td>{{$medewerker->VoorNaam}}</td>
                <td>{{$medewerker->AchterNaam}}</td>
                <td>{{$medewerker->Bedrijf->Naam}}</td>
                <td>{{$medewerker->Email}}</td>
                <td>{{$medewerker->Telefoon}}</td>
                <td><a href="{{ route('Medewerkers.edit',$medewerker->id)}}" class="btn btn-primary">Wijzig</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

