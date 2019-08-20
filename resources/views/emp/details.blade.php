
<!DOCTYPE html>
<html>
<head>
	<title>Details Job</title>
</head>
<body>

	<h2>Details Job</h2>

	<a href="{{route('emp.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>


	<table border="0">
		<tr>
			<td>JobId :</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Companyname :</td>
			<td>{{$std['cname']}}</td>
		</tr>
		<tr>
			<td>Job Title :</td>
			<td>{{$std['title']}}</td>
		</tr>
		<tr>
			<td>Location :</td>
			<td>{{$std['location']}}</td>
		</tr>
		<tr>
			<td>Salary :</td>
			<td>{{$std['salary']}}</td>
		</tr>
</table>

</body>
</html>