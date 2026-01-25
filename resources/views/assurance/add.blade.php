@extends('template')

@section('content')
<form action="{{route($assurance->id ? 'updateAssurance':'storeAssurance')}}"  method="POST">
    @method($assurance->id ? 'PUT':'POST')
    @csrf
    <input name="id" class="form-control" value="{{$assurance->id}}" hidden>
    <label>Libelle</label>
    <input name="libelle" class="form-control" value="{{$assurance->libelle}}">
    <label>Montant</label>
    <input name="montant" class="form-control" value="{{$assurance->montant}}">
    <label>Bonus</label>
    <input name="bonus" class="form-control" value="{{$assurance->bonus}}">
    <br>
    <button class="btn btn-primary" type="submit">{{$assurance->id ?'Update' :'Add'}}</button>
    <button type="reset">Annuler</button>
</form>

@endsection
