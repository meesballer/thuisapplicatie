@extends('app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Naam</td>
            <td>Email</td>
            <td>Website</td>
            <td><a href="{{ route('Bedrijfs.create')}}" class="btn btn-primary">Nieuw bedrijf toevoegen</a></td>
        </tr>
        </thead>
        <tbody>
        @foreach($bedrijven as $bedrijf)
            <tr>
                <td>{{$bedrijf->Naam}}</td>
                <td>{{$bedrijf->Email}}</td>
                <td>{{$bedrijf->Website}}</td>
                <td><a href="{{ route('Bedrijfs.edit',$bedrijf->id)}}" class="btn btn-primary">Wijzig</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

