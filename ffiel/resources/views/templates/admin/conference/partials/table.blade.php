<div ng-init="init()"></div>
<table class="striped">
    <tr>
        <th ng-click="sort('name')">
            Nombre
            <span class="glyphicon sort-icon" ng-show="sortKey=='name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th ng-click="sort('speaker_name')">
            Conferencista
            <span class="glyphicon sort-icon" ng-show="sortKey=='speaker_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th ng-click="sort('description')">
            Fechas
            <span class="glyphicon sort-icon" ng-show="sortKey=='description'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th width="10%">Controllers</th>
    </tr>
    <tr data-dir-paginate="conference in conferences | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
        <td>@{{ conference.name }}</td>
        <td>@{{ conference.speaker_name }}</td>
        <td>@{{ conference.startDate}} - @{{ conference.endDate }}</td>
        <td>
            <div class="row">
                <div class="col s4 m4 l4 ">
                    <a href="{{ url('conferences/') }}/@{{ conference.id }}"><i class="fa fa-eye"></i></a>
                </div>
                <div class="col s4 m4 l4 ">
                    <a data-ng-click="updateConference(conference)"><i class="fa fa-pencil-square-o"></i></a>
                </div>
                <div class="col s4 m4 l4">
                    <a data-ng-click="deleteConference(conference)"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </td>
    </tr>
</table>