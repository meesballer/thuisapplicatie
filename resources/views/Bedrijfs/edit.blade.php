@extends('app')

@section('content')
    <form method="post" action="{{ route('bedrijfs.update', $bedrijf->id) }}">
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
    </form>
@endsection
