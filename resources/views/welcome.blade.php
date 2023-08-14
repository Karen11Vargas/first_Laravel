   
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
                foreach ($concepts as $c) {
                    $imp = $c['precio'] * ($c['taxes'] /100);
                    $desc = $c['precio'] * ($c['descuento'] /100);
                    $total = $c['precio'] + $imp - $desc;

                    $totalPrecio += $c['precio'];
                    $totalImp += $imp;
                    $totalDesc += $desc;
                    $totalFinal += $total;

                    echo "<tr>";
                        echo "<td>".$c['concepto']."</td>";
                        echo "<td>".$c['precio']."</td>";
                        echo "<td>".$c['pais']."</td>";
                        echo "<td>".$c['taxes']."</td>";
                        echo "<td>".$imp."</td>";
                        echo "<td>".$c['descuento']."</td>";
                        echo "<td>".$desc."</td>";
                        echo "<td>".$total."</td>";        
                    echo "</tr>";
                    }

                    echo "<tr>";
                        echo "<td colspan=\"4\"></td>";
                        echo "<td>".$totalPrecio."</td>";
                        echo "<td>".$totalImp."</td>";
                        echo "<td>".$totalDesc."</td>";
                        echo "<td>".$totalFinal."</td>";
                            
                    echo "</tr>";
                
            @endphp
        </tbody>
    </table>
   </body>
   </html>