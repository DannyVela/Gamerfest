<!DOCTYPE html>
<html lang="es">
<head>
<style>
<<<<<<< HEAD
  
=======
>>>>>>> c9ba38cb136ab3cf224e04be1d6e3845d36c51a1
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

<<<<<<< HEAD
<h1>Inscripciones individuales</h1>

<table id="customers">
<tr> 
								<td>#</td> 
								<th>Videojuego Id</th>
								<th>Equipo Id</th>
								<th>Tiempo Inicio</th>
								<th>Fecha</th>
								<th>Observacion</th>

							</tr>
						</thead>
						<tbody>
							@foreach($partidagrs as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->videojuego->nombre }}</td>
								<td>{{ $row->equipo->nombre_equipo }}</td>
								<td>{{ $row->tiempo_inicio }}</td>
								<td>{{ $row->fecha }}</td>
								<td>{{ $row->observacion }}</td>

							@endforeach

</body>

=======
<h1>Partidas grupales</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Videojuego</th>
    <th>Equipo</th>
    <th>Tiempo Inicio</th>
    <th>Fecha</th>
    <th>Observacion</th>
  </tr>
  @foreach ($partidagrs as $partidagr)
  <tr>
    <td>{{$partidagr->id}}</td>
    <td>{{$partidagr->videojuego_id}}</td>
    <td>{{$partidagr->equipo_id}}</td>
    <td>{{$partidagr->tiempo_inicio}}</td>
    <td>{{$partidagr->fecha}}</td>
    <td>{{$partidagr->observacion}}</td>
  </tr>
  @endforeach
</table>

</body>
>>>>>>> c9ba38cb136ab3cf224e04be1d6e3845d36c51a1
</html>