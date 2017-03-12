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

		@foreach($locations as $location)
		<tr onclick="document.location='{{ URL::route('details', ['id'=> $location->id]) }}'">
			<td>{{ $location->id }}</td>
			<td>{{ $location->types }}</td>
			<td>{{ $location->secteur }}</td>
			<td>{{ $location->surface }}</td>
			<td>{{ $location->prix }} €</td>
			@if(Auth::check() == true)
				<td><a href="{{URL::route('supprimerBien', ['id'=> $location->id])}}">supprimer</a></td>
			@endif
		@endforeach
	</table>
	<a href="{{ URL::to('/ajoutBien') }}">ajoutez un bien</a>
</div>

@stop