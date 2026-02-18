@extends('template')

@section('content')
<form action="{{route($assurance->id ? 'updateAssurance':'storeAssurance')}}"  method="POST">
    @method($assurance->id ? 'PUT':'POST')
    @csrf
    <input name="id" class="form-control" value="{{$assurance->id}}" hidden>
    <label>Libelle</label>
    <input name="libelle" class="form-control  @error('libelle')is-invalid @enderror"  value="{{$assurance->id ? $assurance->libelle : old('libelle') }}">
    @error('libelle')
    <div class="text text-danger">{{ $message }}</div>
    @enderror
    <label>Montant</label>
    <input name="montant" class="form-control @error('montant')is-invalid @enderror"   value="{{$assurance->id ? $assurance->montant : old('montant') }}">
    @error('montant')
    <div class="text text-danger">{{ $message }}</div>
    @enderror
    <label>Bonus</label>
    <input name="bonus" class="form-control" value="{{$assurance->id ? $assurance->bonus : old('bonus') }}">
    <label>Type Assurance</label>
    <select class="form-control @error('type_assurance_id')is-invalid @enderror" name="type"  >
        @foreach($types_assurances as $t)
            <option value="{{$t->id}}"   @if($assurance->type_assurance_id == $t->id)  selected @endif  >{{$t->libelle}}</option>
        @endforeach
    </select>
    @error('type_assurance_id')
    <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    <button class="btn btn-primary" type="submit">{{$assurance->id ?'Update' :'Add'}}</button>
    <button type="reset">Annuler</button>
</form>

@endsection
