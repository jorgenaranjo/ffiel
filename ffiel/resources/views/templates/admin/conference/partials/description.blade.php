
<div class="row">
	<div class="col s12 m12 l12">
		<h3 class="heading center-align">{{$conference->name}}</h3>
	</div>
</div>
<div class="row">
	<div class="col s12 m12 l12">
		<h5 class="heading">Conferencista: {{$conference->speaker_name}}</h5>
	</div>
</div>
<div class="row">
	<div class="col s12 m12 l12">
		<h5 class="heading">Asistensia: {{$conference->quantity}}</h5>
	</div>
</div>


<div class="row">
	<div class="col s12 m12 l12">
		<table class="centered striped responsive-table">
			<thead>
				<tr>
					<th>Nombre de usuario</th>
					<th>Correo</th>
					<th>Teléfono celular</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($conference->users as $user) 
					<tr> 
						<td>{{$user->name}} {{$user->lastname}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->cellphone}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	

</div>