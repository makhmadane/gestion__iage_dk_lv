
@extends('template')

    @section('content')
    <a class="btn btn-success" href="{{route('addAssurance')}}">Ajouter</a>
    <table class="table table-striped mt-5">
        <tr>
            <td>Id</td>
            <td>Libelle</td>
            <td>Montant</td>
            <td>Bonus</td>
            <td>Type Assurance</td>
            <td>Action(s)</td>

        </tr>
        @foreach($assurs as $a)

            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->libelle}}</td>
                <td>{{$a->montant}}</td>
                <td>{{$a->bonus}}</td>
                <td>{{$a->typeIage->libelle}}</td>
                <td>
                    <form action="{{route('deleteAssurance',[$a->id])}}" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger" type="submit">Supprimer </button>
                    </form>

                    <a class="btn btn-primary" href="{{route('editAssurance',[$a->id])}}">Modifier  </a>
                </td>
            </tr>

        @endforeach
    </table>
    {{$assurs->links()}}
    @endsection

