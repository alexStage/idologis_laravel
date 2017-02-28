@extends('template')

@section('content')

<div class="conteneur">
	<table class="liste">
		<tr>
			<th>Référence numero bien</th>
			<th>numero bien</th>
			<th>Secteur</th>
			<th>Surface</th>
			<th>Loyer</th>
			@if(Auth::check() == true)
				<th>supprimer<th>
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
					<td><a href="{{URL::route('supprimerBien', ['id'=> $vente->id])}}">supprimer</a></td>
				@endif
			</tr>
		@endforeach
	</table>
	<a href="{{ URL::to('/ajoutBien') }}">ajoutez un bien</a>
</div>

@stop