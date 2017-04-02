@extends('template2')

@section('content')


    <div class="recherche">
         <p>rechercher:</p>
         <form method="get">
         <input type="text" name="recherche" class="text" id="recherche"/>
         
         </form>
    </div>

    <button type="button" id="tri">trier</button>
    
    <div class="resultat" id="resultat"></div>
	<table class="table table-striped">
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
			<tr onclick="document.location='{{ URL::route('details', ['id'=> $vente->id]) }}'" style="background-color:#60656B">
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
<script>
    var token ='{{Session::token()}}';
    var url ='{{URL::route('ajaxVentes')}}';
    //$(this).append('<input name="_token" value="{{{ Session::token() }}}">);
</script>
@stop