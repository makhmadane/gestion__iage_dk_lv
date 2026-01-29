
@extends('template')

@section('content')
    <a class="btn btn-success" href="{{route('type-assurance.create')}}" >Ajouter</a>
<table class="table table-striped mt-5">
    <tr>
        <td>Id</td>
        <td>Libelle</td>
        <td>Action(s)</td>

    </tr>
    @foreach($types as $t)

        <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->libelle}}</td>

            <td>
                <button class="btn btn-danger">Supprimer </button>
                <button class="btn btn-primary">Modifier  </button>
            </td>
        </tr>

    @endforeach
</table>
@endsection
