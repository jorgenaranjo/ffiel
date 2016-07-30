
<div class="row">
	<div class="col s12 m12 l12">
		<h3 class="heading center-align">{{$workshop->name}}</h3>
	</div>
</div>
<div class="row">
	<div class="col s12 m12 l12">
		<h5 class="heading">Tallerista: {{$workshop->speaker_name}}</h5>
	</div>
</div>
<div class="row">
	<div class="col s12 m12 l12">
		<h5 class="heading">Asistensia: {{$workshop->quantity}}</h5>
	</div>
</div>
<div class="row">
	<div class="col s12 m12 l12">
		<h5 class="heading">Lugares disponibles: {{$workshop->available}}</h5>
	</div>
</div>

<div class="row">
	<div class="col s12 m12 l12">
		<table class="centered striped responsive-table">
			<thead>
				<tr>
					<th>Nombre de usuario</th>
					<th>Id de pago</th>
					<th>Fecha de pago</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($workshop->users as $user) 
					<tr> 
						<td>{{$user->name}}</td>
						<td>{{$user->payments->where('workshop_id', $workshop->id)[0]->transaction_number}}</td>
						<td>{{$user->payments->where('workshop_id', $workshop->id)[0]->date}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	

</div>