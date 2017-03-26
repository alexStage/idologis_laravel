@extends('template')

@section('content')

<div class="conteneur">
    <div class="recherche">
         <p>rechercher:</p>
         <input type="text" name="recherche" class="text" id="recherche"/>
    </div>
    
    <div class="resultat" id="resultat"></div>
	<table class="liste">
		<tr>
			<th>Référence numero bien</th>
			<th>numero bien</th>
			<th>Secteur</th>
			<th>Surface</th>
			<th>Loyer</th>
			@if(Auth::check() == true)
                            @if(Auth::User()->isAdmin() == true)
				<th>supprimer<th>
                            @endif
			@endif
		</tr>

		@foreach($ventes as $vente)
			<tr onclick="document.location='{{ URL::route('details', ['id'=> $vente->id]) }}'">
				<td>{{ $vente->id }}</td>
				<td>{{ $vente->types }}</td>
				<td>{{ $vente->secteur }}</td>
				<td>{{ $vente->surface }}</td>
				<td>{{ $vente->prix }} €</td>
				@if(Auth::check() == true)
                                @if(Auth::User()->isAdmin() ==true)
					<td><a href="{{URL::route('supprimerBien', ['id'=> $vente->id])}}">supprimer</a></td>
                                @endif
				@endif
			</tr>
		@endforeach
	</table>
	<a href="{{ URL::to('/ajoutBien') }}">ajoutez un bien</a>
</div>
<script>
    var token ='{{Session::token()}}';
    var url ='{{URL::route('ajaxVentes')}}';
</script>
@stop