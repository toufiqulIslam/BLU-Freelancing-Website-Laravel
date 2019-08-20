<!DOCTYPE html>
<html>
<head>
	<title>Add Job</title>
</head>
<body>

	<h2>Create Job</h2>

	<a href="{{route('emp.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Company Name</td>
			<td><input type="text" name="cname"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type="text" name="location"></td>
		</tr>
		<tr>
			<td>Salary</td>
			<td><input type="text" name="salary"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>

@foreach ($errors->all() as $error)
    {{ $error }} <br>
@endforeach 


</body>
</html>