<table class="striped">
    <tr>
        <th ng-click="sort('name')">
            Nombre
            <span class="glyphicon sort-icon" ng-show="sortKey=='name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th ng-click="sort('speaker_name')">
            Tallerista
            <span class="glyphicon sort-icon" ng-show="sortKey=='speaker_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th ng-click="sort('quantity')">
            Disponibilidad
            <span class="glyphicon sort-icon" ng-show="sortKey=='quantity'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th width="10%">Controllers</th>
    </tr>
    <tr data-dir-paginate="workshop in workshops | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
        <td>@{{ workshop.name }}</td>
        <td>@{{ workshop.speaker_name }}</td>
        <td>@{{ workshop.quantity }}</td>
        <td>
            <div class="row">
                <div class="col s4 m4 l4 ">
                    <a href="{{ url('workshops/') }}/@{{ workshop.id }}"><i class="fa fa-eye"></i></a>
                </div>
                <div class="col s4 m4 l4 ">
                    <a data-ng-click="updateworkshop(workshop)"><i class="fa fa-pencil-square-o"></i></a>
                </div>
                <div class="col s4 m4 l4">
                    <a data-ng-click="deleteworkshop(workshop)"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </td>
    </tr>
</table>