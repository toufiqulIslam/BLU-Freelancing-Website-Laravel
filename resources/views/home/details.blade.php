
<!DOCTYPE html>
<html>
<head>
	<title>Details Student</title>
</head>
<body>

	<h2>Details Student</h2>

	<a href="{{route('home.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>


	<table border="0">
		<tr>
			<td>UserId :</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Employee name :</td>
			<td>{{$std['empname']}}</td>
		</tr>
		<tr>
			<td>Company Name :</td>
			<td>{{$std['cmpname']}}</td>
		</tr>
		<tr>
			<td>Contact :</td>
			<td>{{$std['contact']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$std['username']}}</td>
		</tr>
</table>

</body>
</html>