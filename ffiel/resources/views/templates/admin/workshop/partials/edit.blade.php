<div id="updateworkshop" class="modal modal-fixed-footer edit" >
	<div class="modal-content" style="width: 100% !important; max-height: 100% !important;">
		<h4>Edición de talleres</h4>
		<br>
		@include('templates.admin.workshop.partials.view_image')
		<br>
		@include('templates.admin.workshop.partials.form_create')
	</div>
	<div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
		<a ng-click="updateaction()" class=" modal-action waves-effect waves-green btn-flat">Guardar</a>
	</div>
</div>