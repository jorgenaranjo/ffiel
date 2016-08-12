<div id="deleteConference" class="modal" >
	<div class="modal-content">
		<div class="row">
			<div class="col s2 m2 l2">
				<i class="fa fa-trash fa-3x"></i>
			</div>
			<div class="col s10 m10 l10">
				<h4>Eliminación de Conferencias</h4>
			</div>
		</div>
		<div class="row">
			<div class="col s6 m6 l6">
				<p>Desea eliminar la conferencia, @{{entity.name}} ?
					Impartido por @{{entity.speaker_name}}</p>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">No</a>
		<a ng-click="actionDelete ()" class=" modal-action waves-effect waves-green btn-flat">Si</a>
	</div>
</div>