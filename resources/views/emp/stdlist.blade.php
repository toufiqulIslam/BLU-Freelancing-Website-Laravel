<!DOCTYPE html>
<html>
<head>
	<title>Job List</title>
</head>
<body>

	<h2>Job List:</h2>
	
	<a href="/emp">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company Name</td>
			<td>Title</td>
			<td>Location</td>
			<td>Salary</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['cname']}}</td>
			<td>{{$value['title']}}</td>
			<td>{{$value['location']}}</td>
			<td>{{$value['salary']}}</td>
			<td>
				<a href="{{route('emp.edit', $value['id'])}}">Edit</a> |
				<a href="{{route('emp.delete', $value['id'])}}">Delete</a> |
				<a href="{{route('emp.details', $value['id'])}}">Details</a>
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>