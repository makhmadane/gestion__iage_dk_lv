
@extends('template')

@section('content')
    <a class="btn btn-success" href="{{route('type-assurance.create')}}" >Ajouter</a>
<table class="table table-striped mt-5">
    <tr>
        <td>Id</td>
        <td>Photo</td>
        <td>Libelle</td>
        <td>Assurances</td>
        <td>Action(s)</td>

    </tr>
    @foreach($types as $t)

        <tr>
            <td>{{$t->id}}</td>
            <td>
                <img src="{{ asset('storage/'.$t->image) }}" width="70">
            </td>
            <td>{{$t->libelle}}</td>

            <td>
                @forelse($t->assurancesList as $a)
                   <li>{{$a->libelle}}</li>
                @empty
                    <p>No inssurances</p>
                @endforelse
            </td>
            <td>
                <button class="btn btn-danger">Supprimer </button>
                <button class="btn btn-primary">Modifier  </button>
            </td>
        </tr>

    @endforeach
</table>
@endsection
