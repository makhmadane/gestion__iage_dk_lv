
@extends('template')

    @section('content')
    <a class="btn btn-success" href="{{route('addAssurance')}}">Ajouter</a>
    <table class="table table-striped mt-5">
        <tr>
            <td>Id</td>
            <td>Libelle</td>
            <td>Montant</td>
            <td>Bonus</td>
            <td>Action(s)</td>

        </tr>
        @foreach($assurs as $a)

            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->libelle}}</td>
                <td>{{$a->montant}}</td>
                <td>{{$a->bonus}}</td>
                <td>
                    <button class="btn btn-danger">Supprimer </button>
                    <button class="btn btn-primary">Modifier  </button>
                </td>
            </tr>

        @endforeach
    </table>
    @endsection

