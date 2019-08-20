
<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
</head>
<body>

	<h2>Delete Student</h2>

	<a href="{{route('emp.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>UserId :</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Company name :</td>
			<td>{{$std['cname']}}</td>
		</tr>
		<tr>
			<td>Title :</td>
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
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>