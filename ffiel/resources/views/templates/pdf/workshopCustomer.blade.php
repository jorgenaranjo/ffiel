<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="UTF-8">
        <title>PDF Admisiones</title>
        <style>
            html, body {
                padding-left: 10px;
                padding-right: 10px;
                margin-left: 20px;
                margin-right: 20px;
            }
            .page-break {
                page-break-after: always;
            }
            table {
                border-collapse: collapse;
            }

        </style>
    </head>
    <body style="">
        <div class="clearfix">
            <table style="width:100%">
                <tr>
                    <td style="width:100%">
                        <center>
                            @include('layouts.generals.imageLogoReportes')
                        </center>
                    </td>
                </tr>
            </table>
            <center><h1>{!! $workshop['name'] !!}</h1></center>
            <table width="100%">
                <tr>
                    <th width="35%"><h4>Nombre tallerista:</h4></th>
                    <td><h4>{{ $workshop['speaker_name'] }}</h4></td>
                </tr>
                <tr>
                    <th><h4>Nombre asistente:</h4></th>
                    <td><h4>{{ $user['name'] }}</h4></td>
                </tr>
                <tr>
                    <th><h4>Fecha de taller:</h4></th>
                    <td>
                        <h4>{{ $workshop['startDate'] }} y {{ $workshop['endDate'] }}</h4>
                    </td>
                </tr>
            </table>
            <p style="font-size: 8px; text-align: justify">{!!  $workshop['description'] !!}</p>
        </div>
    </body>
</html>