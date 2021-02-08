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
        @foreach($bedrijfs as $bedrijf)
            <tr>
                <td>{{$bedrijf->VoorNaam}}</td>
                <td>{{$bedrijf->AchterNaam}}</td>
                <td>{{$bedrijf->Bedrijf}}</td>
                <td>{{$bedrijf->Email}}</td>
                <td>{{$bedrijf->Telefoon}}</td>
                <td><a href="{{ route('bedrijfs.edit',$bedrijf->id)}}" class="btn btn-primary">Wijzig</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

