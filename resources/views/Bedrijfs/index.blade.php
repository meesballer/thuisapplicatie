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
        @foreach($bedrijven as $bedrijf)
            <tr>
                <td>{{$bedrijf->Naam}}</td>
                <td>{{$bedrijf->Email}}</td>
                <td>{{$bedrijf->Website}}</td>
                <td><a href="{{ route('bedrijfs.edit',$bedrijf->id)}}" class="btn btn-primary">Wijzig</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

