<div ng-init="getEvent()"></div>
<form name="dinf" ng-submit="submitForm(dinf.$valid)" novalidate>
	<div class="row">
		<div class="input-field col s6 m6 l6">
			<input placeholder="{{ trans('workshop.name_workshop') }}" id="name_workshop" class="validate" ng-model="workshopCreate.name" type="text" class="validate">
			<label for="name_workshop" data-error="Sin nombre de taller">{{ trans('workshop.name_workshop') }}</label>
		</div>
		<div class="col s6 m6 l6">
			<div class="switch">
				<label><div class="col s12 m12 l12">{{ trans('workshop.active') }}</div>
					<!--No-->
					<input type="checkbox" ng-model="workshopCreate.active">
					<span class="lever"></span>
					<!--Si-->
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s6 m6 l6">
			<div class="input-field col s6 m6 l6">
				<input  placeholder="{{ trans('workshop.quantity') }}" id="quantity" ng-model="workshopCreate.quantity" type="number" min="0" class="validate">
				<label for="quantity">{{ trans('workshop.quantity') }}</label>
			</div>
			<div ng-if="edit">
				<div class="input-field col s6 m6 l6">
					<input placeholder="Placeholder" id="available" ng-model="workshopCreate.available" type="number" min="0" class="validate active">
					<label for="available" >{{ trans('workshop.available') }}</label>
				</div>
			</div>
        </div>
        <div class="col s6 m6 l6">
        	<label>{{ trans('workshop.event')}}</label>
        	<select class="browser-default" ng-model="workshopCreate.event_id">
        		<option value=""  selected>{{ trans('workshop.select_event')}}</option>
        		<option ng-repeat="event in events" value="@{{event.id}}" >@{{event.label}}</option>
        		
        	</select>
        </div>
	</div>
	<div class="row">
		<div class="col s6 m6 l6">
			<label for="startDate">{{ trans('workshop.startDate_form')}}</label>
			<input id="startDate" class="datepicker" ng-model="workshopCreate.startDate" type="text" format="yyyy-mm-dd"/>
		</div>
		<div class="col s6 m6 l6">
			<label for="endDate_form">{{ trans('workshop.endDate_form')}}</label>
			<input id="endDate" ng-model="workshopCreate.endDate" type="text" format="yyyy-mm-dd" class="datepicker">
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="input-field col s3 m3 l3">
				<input  placeholder="{{ trans('workshop.city') }}" id="city" ng-model="workshopCreate.city" type="text" class="validate">
				<label for="city">{{ trans('workshop.city') }}</label>
	        </div>
	        <div class="input-field col s3 m3 l3">
				<input  placeholder="{{ trans('workshop.street') }}" id="street" ng-model="workshopCreate.street" type="text" min="0" class="validate">
				<label for="street">{{ trans('workshop.street') }}</label>
	        </div>
	        <div class="input-field col s3 m3 l3">
				<input  placeholder="{{ trans('workshop.state') }}" id="state" ng-model="workshopCreate.state" type="text" min="0" class="validate">
				<label for="state">{{ trans('workshop.state') }}</label>
	        </div>
	        <div class="input-field col s3 m3 l3">
				<input  placeholder="{{ trans('workshop.noExt') }}" id="noExt" ng-model="workshopCreate.noExt" type="text" min="0" class="validate">
				<label for="noExt">{{ trans('workshop.noExt') }}</label>
	        </div>
    	</div>
	</div>
	<div class="row">
		<div class="input-field col s4 m4 l4">
			<input  placeholder="{{ trans('workshop.code') }}" id="code" ng-model="workshopCreate.code" type="text" class="validate">
			<label for="code">{{ trans('workshop.code') }}</label>
        </div>
		<div class="input-field col s4 m4 l4">
			<input  placeholder="{{ trans('workshop.price') }}" id="price" ng-model="workshopCreate.price" type="text" class="validate">
			<label for="price">{{ trans('workshop.price') }}</label>
        </div>
        <div class="input-field col s4 m4 l4">
			<input  placeholder="{{ trans('workshop.hours') }}" id="hours" ng-model="workshopCreate.hours" type="text" class="validate">
			<label for="hours">{{ trans('workshop.hours') }}</label>
        </div>
	</div>
	<div class="row">
		<div class="col s6 m6 l6">
			<textarea class="ckeditor" placeholder="Descripción" ng-model="workshopCreate.description" ck-editor name="editor1" id="editor1" rows="10" cols="80"></textarea>
		</div>
		<div class ="col s6 m6 l6">
			<div class="file-field input-field">
				<div class="btn">
					<span>{{ trans('workshop.image') }}</span>
					<input type="file" ng-model="file_workshop" onload="onLoad" maxsize="700" accept="image/*" base-sixty-four-input required>
					<span ng-show="dinf.file_workshop.$error.maxsize">La imagen que intentas subir pesa más de 1000 KB (1 MB)</span>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input  placeholder="{{ trans('workshop.speaker_name') }}" id="speaker_name" ng-model="workshopCreate.speaker_name" type="text" class="validate">
					<label for="speaker_name">{{ trans('workshop.speaker_name') }}</label>
		        </div>
				<div class="input-field col s12 m12 l12">
					<input  placeholder="{{ trans('workshop.speaker_occupation') }}" id="speaker_occupation" ng-model="workshopCreate.speaker_occupation" type="text" class="validate">
					<label for="speaker_occupation">{{ trans('workshop.speaker_occupation') }}</label>
		        </div>
		        <div class="input-field col s12 m12 l12">
		        	<div class="file-field input-field">
		        		<div class="btn">
		        			<span>{{ trans('workshop.speaker_image') }}</span>
		        			<input type="file" ng-model="file_speaker" onload="onLoad" maxsize="700" accept="image/*" base-sixty-four-input required>
		        			<span ng-show="dinf.file_speaker.$error.maxsize">La imagen que intentas subir pesa más de 1000 KB (1 MB)</span>
		        		</div>
		        		<div class="file-path-wrapper">
		        			<input class="file-path validate" type="text">
		        		</div>
		        	</div>
		        </div>
			</div>
		</div>
	</div>
</form>
