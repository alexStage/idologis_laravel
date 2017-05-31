@extends('template2')


@section('content')

<table class="table table-striped">
        <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>voir</th>
        </tr>

        @foreach($users as $user)
        <tr id="vendeur" style="background-color:#60656B">
            <td>{{ $user->name }}</td>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->email }}</td>
            <td><button {{Session::token()}} onclick="function(){ $('#{{$user->id}}' ).hide();}">voir</button></td>
        </tr>
        @endforeach
        
</table>

@foreach($users as $user)
<table  id="{{$user->id}}" class="table table-striped">
    <th>Référence numero bien</th>
        <th>type</th>
        <th>Secteur</th>
        <th>Surface</th>
    <th>Loyer</th>
@foreach($user->biens as $bien)
<tr style="background-color:#60656B">
    <td>{{$bien->id}}</td>
    <td>{{$bien->types}}</td>
    <td>{{ $bien->secteur }}</td>
    <td>{{ $bien->surface }}</td>
    <td>{{ $bien->prix }} €</td>
</tr>
@endforeach
</table>
@endforeach




@stop

