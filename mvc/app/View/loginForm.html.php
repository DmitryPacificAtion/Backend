<form method="POST">
	<input type="text" name="login" placeholder="Login" required>
	<input type="password" name="password" placeholder="Password" required>
	<input type="submit" name="submit" value="Log In">
</form>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['login']) && isset($_POST['password'])) {
		$l = $_POST['login'];
		$p = $_POST['password'];
	}
}
?>