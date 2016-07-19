<table class="striped">
    <tr>
        <th>
            Imagen
        </th>
        <th>
            Nombre
        </th>
        <th>
            Tallerista
        </th>
        <th>
            Horario
        </th>
        <th>
            Lugar
        </th>
        <th>
            Imprimir
        </th>
    </tr>
    <tr data-dir-paginate="workshop in workshops | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
        <td><img ng-src="@{{ workshop.image }}" class="img-responsive" style="max-height: 150px; max-width: 150px"></td>
        <td>@{{ workshop.name }}</td>
        <td>@{{ workshop.speaker_name }}</td>
        <td>@{{ workshop.startDate }} - @{{ workshop.endDate }}</td>
        <td>@{{ workshop.street }} ,@{{ workshop.state }}, @{{ workshop.city }}</td>
        <td class="center"><a href="api/v1/myWorkshops/createPDFWorkshop/@{{ workshop.id }}" target="_blank"><i class="fa fa-file-pdf-o fa-3x deep-orange-text text-darken-4" aria-hidden="true"></i></a></td>
    </tr>
</table>