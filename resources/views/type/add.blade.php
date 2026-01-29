@extends('template')

@section('content')
    <form action="{{route('type-assurance.store')}}"  method="POST">
        @csrf
        <input name="id" class="form-control" hidden>
        <label>Libelle</label>
        <input name="libelle" class="form-control" >

        <button class="btn btn-primary" type="submit">Add</button>
        <button type="reset">Annuler</button>
    </form>

@endsection
