@extends('app')

@section('content')
    <form method="post" action="{{ route('Bedrijfs.store') }}">
        <div class="form-group">
            @csrf
            <label>Naam</label>
            <input type="text" class="form-control" name="Naam" id="Naam"/>
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="Email"/>
        </div>
        <div class="form-group">
            <label>Website</label>
            <input type="text" class="form-control" name="Website"/>
        </div>

        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>
@endsection
