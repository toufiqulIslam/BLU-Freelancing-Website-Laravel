<!DOCTYPE html>
<html>
<head>
	<title>Employee List</title>
</head>
<body>

	<h2>Employee List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<form method="post">
		@csrf
		<br/><br/><input type="text" name="search">
		<input type="submit" value="Search">
		<a href="{{route('home.stdlist')}}">View All</a> 
	</form>

	<table border="1">
		<br/><br/><tr>
			<td>ID</td>
			<td>Employee Name</td>
			<td>Company Name</td>
			<td>Contact</td>
			<td>Username</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['empname']}}</td>
			<td>{{$value['cmpname']}}</td>
			<td>{{$value['contact']}}</td>
			<td>{{$value['username']}}</td>
			<td>
				<a href="{{route('home.edit', $value['id'])}}">Edit</a> |
				<a href="{{route('home.delete', $value['id'])}}">Delete</a> |
				<a href="{{route('home.details', $value['id'])}}">Details</a>
			</td>
		</tr>
		@endforeach

	</table>

</body>
</html>