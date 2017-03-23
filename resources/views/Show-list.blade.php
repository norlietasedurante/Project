<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
		body {
		background: #2e8b57; 
		background: -webkit-linear-gradient(to left, #2e8b57 , #4682b4	); 
		background: linear-gradient(to left, #2e8b57 , #4682b4	);
    }
    .logo{
		position: fixed;
		top: 0%;
	}	

		table{
				border-collapse: collapse;
				width: 1%;
				color: white;
				margin-top: 10%;
			}	
		td {
				padding: 1%;
				text-align: left;
				border-bottom: 1% solid #ddd;
			}
		th{
				padding: 1%;
				background-color: #4CAF50;
				color: white;
			}
		table, th, td{
					border: 1px solid black;
			}
		table{
					width: 80%;
				margin-left: 10%;
			}
		.update{
			padding-left: 1%;
			text-align: center;
		}
		.delete{
			padding-left: 1%;
			text-align: center;
		}
		.main {
			width: 100%;

		}
		.ul{
		list-style-type: none;
		margin-left:100%;
		padding: 0%;
		overflow: hidden;
		background-color:  #333;
		position: fixed;
		top: 2%;
		width: 90%;
		height: 7%;	
		margin-left: 7%;
	}	li{
		float:left;
		margin-left: 1%;
		border-right: 1px solid #bbb;
	}
	li a{
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 26px;
		text-decoration: none;
		border: 30%;
	}
	 li a:hover{
		color: #111;
	}
	.add{
		padding-left: 82%;

	}
</style>
<div class="ul">
	
		
			<li><a href="/index.blade">Home</a></p>
			<li><a href="/About.blade">About</a></p>
			<li><a href="/Achievements.blade">Achievements</a></p>
			<li><a href="/rules.blade">Rules&Regulations</a></li>
			<li><a class="active" href="/form.blade">Form</a></li>
		
</div>
<body>
		<div class="logo">
				<img src=" {{ URL::asset('img/nory13.png') }}" width="50%" >	
		</div>

<div class="main">
	<table>
		<thead>

			<tr>
			
				<th> Name</th>
				<th> Age </th>
				<th> Address </th>
				<th> Guardian </th>
				<th> Course </th>
				<th> </th>
				<th> </th>
				
						
			</tr>
		</thead>

	<tbody>

			<?php foreach ($users as $student ):
			?>
				<tr>
					<td> {{ $student->name }}</td>
					<td> {{ $student->age}} </td>
					<td> {{ $student->address }}  </td>
					<td> {{ $student->guardian }} </td>
					<td> {{ $student->course }}  </td>

		<td>	
		</div>		
	<form method="POST" action="/update">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{$student->id}}">
		<input type="hidden" name="Name" value="{{$student->Name}}">
		<input type="hidden" name="Age" value="{{$student->Age}}">
		<input type="hidden" name="Address" value="{{$student->Address}}">
		<input type="hidden" name="Guardian" value="{{$student->Guardian}}">
		<input type="hidden" name="Course" value="{{$student->Course}}">
		<button class="btn" >edit</button>

	</form>
	<td>
	<form method="POST" action="delete/{{$student->id}}">
				{{ csrf_field() }}
		<input type="hidden" name="id" value="{{$student->id}}">
		<input type="hidden" name="Name" value="{{$student->Name}}">
		<input type="hidden" name="Age" value="{{$student->Age}}">
		<input type="hidden" name="Address" value="{{$student->Address}}">
		<input type="hidden" name="Guardian" value="{{$student->Guardian}}">
		<input type="hidden" name="Course" value="{{$student->Course}}">
		<button class="btn" >delete</button>
			<?php endforeach; ?>
	</tbody>
		
	
	</table>
	<br>
		<br>
<div class="add">
	<form method="POST" action="/add-students">
		{{ csrf_field() }}
		<button class="btn" type="submit">Add Student</button></form><br><br>
	</form>
</div>


</body>
</html>