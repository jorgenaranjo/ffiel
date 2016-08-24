<div class="col s12 m12 l12">
	<div class="col s6 m6 l6">
		<button class="waves-effect waves-light btn" id="addconference" name="addconference" data-ng-click="save()">
			<i class="fa fa-plus-square"></i>  Agregar conferencia 
		</button>
	</div>
	<div class="col s6 m6 l6">
		<a class="waves-effect red darken-1 btn" href="{{ route('conferences.index') }}">
			<i class="fa fa-times"></i> Cancelar</a>
	</div>
</div>