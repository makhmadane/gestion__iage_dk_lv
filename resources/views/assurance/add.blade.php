@extends('template')

@section('content')
<form action="{{route('storeAssurance')}}"  method="POST">
    @method('POST')
    @csrf
    <label>Libelle</label>
    <input name="libelle" class="form-control">
    <label>Montant</label>
    <input name="montant" class="form-control">
    <label>Bonus</label>
    <input name="bonus" class="form-control">
    <br>
    <button class="btn btn-primary" type="submit">Add</button>
    <button type="reset">Annuler</button>
</form>

@endsection
