<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('user')}}</h1> 

	
	<a href="/emp/add">Create</a> |
	<a href="/emp/stdList">Job List</a> |
	<a href="/logout">logout</a>


</body>
</html>