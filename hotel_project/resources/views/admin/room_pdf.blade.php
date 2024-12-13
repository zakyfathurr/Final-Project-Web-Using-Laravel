<!DOCTYPE html>
<html>
<head>
	<title>Laporan Room</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
            padding: 5px;
            text-align: center;
		}
		.table-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
      }
      .table {
        width: 80%;  /* Adjust the width as needed */
        max-width: 1000px;
		margin:auto; 
      }
	</style>
	<center>
		<h5>List of Rooms</h4>
	</center>
	<div class="text-center">
	<table class="table table-striped" border="1">
		<thead>
			<tr>
                <th scope="col">No</th>
                <th scope="col">Room Name</th>
                <th scope="col">Room Type</th>
                <th scope="col">Price</th>
                <th scope="col">Wifi</th>
                <th scope="col">Description</th>
			</tr>
		</thead>
		<tbody>
			@foreach($room as $p)
			<tr>
				<td>{{ $p->id }}</td>
				<td>{{$p->room_title}}</td>
				<td>{{$p->room_type}}</td>
				<td>Rp {{$p->price}}</td>
				<td>{{$p->wifi}}</td>
                <td>{{$p->description}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
 
</body>
</html>
