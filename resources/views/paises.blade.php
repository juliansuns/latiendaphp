<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
</head>
<body>
    <h1>Paises de la region</h1>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pais</th>
                <th>Capita</th>
                <th>Moneda</th>
                <th>Población</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais => $infoPais)
                <tr >
                    <td rowspan="{{ count($infoPais['CIU'])  }}">{{$pais}}</td>
                    <td rowspan="{{ count($infoPais['CIU'])  }}">{{$infoPais["CAP"]}}</td>
                    <td rowspan="{{ count($infoPais['CIU'])  }}">{{$infoPais["MON"]}}</td>
                    <td rowspan="{{ count($infoPais['CIU'])  }}">{{$infoPais["POB"]}} Millones Habitantes</td>
                    @foreach($infoPais["CIU"] as $ciudad)
                        <td>        
                            {{$ciudad}}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>