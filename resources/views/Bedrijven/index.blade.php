@extends('app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Naam</td>
            <td>Adres</td>
            <td>Postcode</td>
            <td>Woonplaats</td>
            <td>email</td>
        </tr>
        </thead>
        <tbody>
        @foreach($medewerkers as $medewerker)
            <tr>
                <td>{{$medewerker->VoorNaam}}</td>
                <td>{{$medewerker->AchterNaam}}</td>
                <td>{{$medewerker->Bedrijf}}</td>
                <td>{{$medewerker->Email}}</td>
                <td>{{$medewerker->Telefoon}}</td>
                <td><a href="{{ route('medewerkers.edit',$medewerker->id)}}" class="btn btn-primary">Wijzig</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

