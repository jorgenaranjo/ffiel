<div id="updateConference" class="modal modal-fixed-footer edit" >
	<div class="modal-content" style="width: 100% !important; max-height: 100% !important;">
		<h4>Edición de conferencias</h4>
		<br>
		@include('templates.admin.conference.partials.view_image')
		<br>
		@include('templates.admin.conference.partials.create')
	</div>
	<div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
		<a ng-click="updateAction()" class=" modal-action waves-effect waves-green btn-flat">Guardar</a>
	</div>
</div>