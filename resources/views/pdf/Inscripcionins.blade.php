<!DOCTYPE html>
<html lang="es">
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
<<<<<<< HEAD
  background-color: #2a0927;
  color: white;
}
header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
<header>
    <h1>GamerFest.com</h1>
</header>

<footer>
    <h1>www.GamerFest.com</h1>
</footer>

=======
  background-color: #04AA6D;
  color: white;
}
>>>>>>> c9ba38cb136ab3cf224e04be1d6e3845d36c51a1
</style>
</head>
<body>

<h1>Inscripciones individuales</h1>

<table id="customers">
<<<<<<< HEAD
							<tr> 
								<td>ID</td> 
								<th>Videojuego</th>
								<th>Jugador</th>
								<th>Observacion</th>
							</tr>
						</thead>
						<tbody>
							@foreach($inscripcionins as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->videojuego->nombre }}</td>
								<td>{{ $row->jugadore->nombre }}</td>
								<td>{{ $row->observacion }}</td>
								
						
							@endforeach
						</tbody>
					</table>	
=======
  <tr>
    <th>ID</th>
    <th>Videojuego</th>
    <th>Jugador</th>
    <th>Observacion</th>
  </tr>
  @foreach ($inscripcionins as $inscripcionin)
  <tr>
    <td>{{$inscripcionin->id}}</td>
    <td>{{$inscripcionin->videojuego_id}}</td>
    <td>{{$inscripcionin->jugador_id}}</td>
    <td>{{$inscripcionin->observacion}}</td>
  </tr>
  @endforeach
</table>
>>>>>>> c9ba38cb136ab3cf224e04be1d6e3845d36c51a1

</body>
</html>