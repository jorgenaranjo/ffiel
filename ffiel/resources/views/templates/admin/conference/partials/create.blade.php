<div ng-init="getEvent()"></div>
<form name="dinf" ng-submit="submitForm(dinf.$valid)" novalidate>
	<div class="row">
		<div class="input-field col s6 m6 l6">
			<input placeholder="{{ trans('conference.name_conference') }}" id="name_conference" class="validate" ng-model="conferenceCreate.name" type="text" class="validate">
			<label for="name_conference" data-error="Sin nombre de taller">{{ trans('conference.name_conference') }}</label>
		</div>
		<div class="col s6 m6 l6">
			<div class="switch">
				<label><div class="col s12 m12 l12">{{ trans('conference.active') }}</div>
					<!--No-->
					<input type="checkbox" ng-model="conferenceCreate.active">
					<span class="lever"></span>
					<!--Si-->
				</label>
			</div>
		</div>
	</div>
	<div class="row">
        <div class="col s6 m6 l6">
        	<label>{{ trans('conference.event')}}</label>
        	<select class="browser-default" ng-model="conferenceCreate.event_id">
        		<option value=""  selected>{{ trans('conference.select_event')}}</option>
        		<option ng-repeat="event in events" value="@{{event.id}}" >@{{event.label}}</option>
        	</select>
        </div>
        <div class="input-field col s6 m6 l6">
			<input  placeholder="{{ trans('conference.code') }}" id="code" ng-model="conferenceCreate.code" type="text" class="validate">
			<label for="code">{{ trans('conference.code') }}</label>
        </div>
	</div>
	<div class="row">
		<div class="col s6 m6 l6">
			<label for="startDate">{{ trans('conference.startDate_form')}}</label>
			<input id="startDate" class="datepicker" ng-model="conferenceCreate.startDate" type="text" format="yyyy-mm-dd"/>
		</div>
		<div class="col s6 m6 l6">
			<label for="endDate_form">{{ trans('conference.endDate_form')}}</label>
			<input id="endDate" ng-model="conferenceCreate.endDate" type="text" format="yyyy-mm-dd" class="datepicker">
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="input-field col s3 m3 l3">
				<input  placeholder="{{ trans('conference.state') }}" id="state" ng-model="conferenceCreate.state" type="text" min="0" class="validate">
				<label for="state">{{ trans('conference.state') }}</label>
	        </div>
			<div class="input-field col s3 m3 l3">
				<input  placeholder="{{ trans('conference.city') }}" id="city" ng-model="conferenceCreate.city" type="text" class="validate">
				<label for="city">{{ trans('conference.city') }}</label>
	        </div>
	        <div class="input-field col s3 m3 l3">
				<input  placeholder="{{ trans('conference.street') }}" id="street" ng-model="conferenceCreate.street" type="text" min="0" class="validate">
				<label for="street">{{ trans('conference.street') }}</label>
	        </div>
	        <div class="input-field col s3 m3 l3">
				<input  placeholder="{{ trans('conference.noExt') }}" id="noExt" ng-model="conferenceCreate.noExt" type="text" min="0" class="validate">
				<label for="noExt">{{ trans('conference.noExt') }}</label>
	        </div>
    	</div>
	</div>
	<div class="row">
        <div class="input-field col s6 m6 l6">
        	<input  placeholder="{{ trans('conference.speaker_name') }}" id="speaker_name" ng-model="conferenceCreate.speaker_name" type="text" class="validate">
        	<label for="speaker_name">{{ trans('conference.speaker_name') }}</label>
        </div>
        <div class="input-field col s6 m6 l6">
        	<div class="file-field input-field">
        		<div class="btn">
        			<span>{{ trans('conference.speaker_image') }}</span>
        			<input type="file" ng-model="file_speaker" onload="onLoad" maxsize="700" accept="image/*" base-sixty-four-input required>
        			<span ng-show="dinf.file_speaker.$error.maxsize">La imagen que intentas subir pesa más de 1000 KB (1 MB)</span>
        		</div>
        		<div class="file-path-wrapper">
        			<input class="file-path validate" type="text">
        		</div>
        	</div>
        </div>
	</div>
	<div class="row">
		<div class="col s6 m6 l6">
			<textarea class="ckeditor" placeholder="Descripción" ng-model="conferenceCreate.description" ck-editor name="editor1" id="editor1" rows="10" cols="80"></textarea>
		</div>
		<div class ="col s6 m6 l6">
			<div class="file-field input-field">
				<div class="btn">
					<span>{{ trans('conference.image') }}</span>
					<input type="file" ng-model="file_conference" onload="onLoad" maxsize="700" accept="image/*" base-sixty-four-input required>
					<span ng-show="dinf.file_workshop.$error.maxsize">La imagen que intentas subir pesa más de 1000 KB (1 MB)</span>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
		</div>
	</div>
</form>
