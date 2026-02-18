@extends('template')

@section('content')


    <form action="{{route('type-assurance.store')}}"  method="POST" enctype="multipart/form-data">>
        @csrf
        <input name="id" class="form-control" hidden>
        <label>Photo</label>
        <input type="file" name="image" id=""  class="form-control">
        <label>Libelle</label>
        <input name="libelle" class="form-control  @error('libelle')is-invalid @enderror"   >
        @error('libelle')
        <div class="text text-danger">{{ $message }}</div>
        @enderror

        <button class="btn btn-primary" type="submit">Add</button>
        <button type="reset">Annuler</button>
    </form>

@endsection
