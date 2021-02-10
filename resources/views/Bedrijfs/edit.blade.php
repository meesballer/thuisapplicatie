@extends('app')

@section('content')
    <form method="post" action="{{ route('Bedrijfs.update', $bedrijf->id) }}">
        @method('PATCH')
        <div class="form-group">
            @csrf
            <label>Naam</label>
            <input type="text" class="form-control" name="Naam" value="{{$bedrijf->Naam}}"/>
        </div>
        <div class="form-group">
            <label>woonplaats</label>
            <input type="text" class="form-control" name="Email" value="{{$bedrijf->Email}}"/>
        </div>
        <div class="form-group">
            <label>Website</label>
            <input type="text" class="form-control" name="Website"value="{{$bedrijf->Website}}"/>
        </div>
        <button type="submit" class="btn btn-primary">Wijzigen</button>
        <form action="{{ route('Bedrijfs.destroy', $bedrijf->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Verwijder</button>
        </form>
    </form>
@endsection
