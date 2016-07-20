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
                background-image: url("/images/ffielNegro500.png");
                background-repeat: no-repeat;
                background-position: 100% 50%;
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
                    <th width="35%"><h5>Nombre tallerista:</h5></th>
                    <td><h5>{{ $workshop['speaker_name'] }}</h5></td>
                </tr>
                <tr>
                    <th><h5>Nombre asistente:</h5></th>
                    <td><h5>{{ $user['name'] }}</h5></td>
                </tr>
                <tr>
                    <th><h5>Fecha de taller:</h5></th>
                    <td>
                        <h5>{{ $workshop['startDate'] }} {{ $workshop['hours'] }} y {{ $workshop['endDate'] }} {{ $workshop['hours'] }}</h5>
                    </td>
                </tr>
                <tr>
                    <th><h5>Referenc&iacute;a de pago:</h5></th>
                    <td>
                        <h5>{{ $payment[0]['transaction_number'] }}</h5>
                    </td>
                </tr>
            </table>
            <p style="font-size: 5px; text-align: justify">{!!  $workshop['description'] !!}</p>
        </div>
    </body>
</html>