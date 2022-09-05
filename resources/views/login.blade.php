<h1>login</h1>

<form action="form" method="post">
@csrf
	<input type="text" name="Username" placeholder="enter user id">
	<input type="password" name="UserPassword" placeholder="enter user password">
	<button type="submit">Login</button>

</form>