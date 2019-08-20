
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>

	<h2>Edit Student</h2>

	<a href="{{route('home.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Employee name</td>
			<td><input type="text" name="empname" value="{{$std['empname']}}"></td>
		</tr>
		<tr>
			<td>Company Name</td>
			<td><input type="text" name="cmpname" value="{{$std['cmpname']}}"></td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td><input type="number" name="contact" value="{{$std['contact']}}"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname" value="{{$std['username']}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="{{$std['password']}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>