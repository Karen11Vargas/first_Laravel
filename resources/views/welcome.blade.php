   
    @php
    $concepts = [
        [
            'concepto' =>'Curso Laravel 9',
            'precio' => 20,
            'pais' => 'COL',
            'taxes' => 10,
            'descuento' => 0
        ],
        [
            'concepto' =>'Curso Python',
            'precio' => 10,
            'pais' => 'COL',
            'taxes' => 13,
            'descuento' => 12
        ],
        [
            'concepto' =>'Curso Programacion',
            'precio' => 50,
            'pais' => 'COL',
            'taxes' => 14,
            'descuento' => 0
        ]
    ];
    @endphp
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title> {{env('APP_NAME')}}</title>
   </head>
   <body>
    <table border="2">
        <thead>
            <tr>
                <th>Concepto</th>
                <th>Precio</th>
                <th>Pais</th>
                <th>Imp (%)</th>
                <th>Impuesto</th>
                <th>Descuento (%)</th>
                <th>Descuento</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalPrecio = 0;
                $totalImp = 0;
                $totalDesc = 0;
                $totalFinal = 0;
            @endphp

            @foreach ($concepts as $c) 
                @php
                    $imp = $c['precio'] * ($c['taxes'] /100);
                    $desc = $c['precio'] * ($c['descuento'] /100);
                    $total = $c['precio'] + $imp - $desc;

                    $totalPrecio += $c['precio'];
                    $totalImp += $imp;
                    $totalDesc += $desc;
                    $totalFinal += $total;
                @endphp
        
                <tr>
                    <th>{{$c['concepto']}}</th>
                    <th>{{$c['precio']}}</th>
                    <th>{{$c['pais']}}</th>
                    <th>{{$c['taxes']}}</th>
                    <th>{{$imp}}</th>
                    <th>{{$c['descuento']}}</th>
                    <th>{{$desc}}</th>
                    <th>{{$total}}</th>
                </tr>
            @endforeach

                <tr>
                    <td colspan="4"></td>
                    <td>{{$totalPrecio}}</td>
                    <td>{{$totalImp}}</td>
                    <td>{{$totalDesc}}</td>
                    <td>{{$totalFinal}}</td>
                </tr>
  
        </tbody>
    </table>
   </body>
   </html>