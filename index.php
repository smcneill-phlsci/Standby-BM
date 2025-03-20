<!DOCTYPE html>
<html lang='en'>
<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Atom GateWay Portal</title>

  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'>
  <link href="fonts/css/stylesheet.css" rel="stylesheet" type="text/css" />
  <link href="fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<style>
html,body {
  height:100%;
  width:100%;
  margin:0;
}
body {
  display:flex;
}
form {
  margin:auto;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:visited,
.btn-primary:focus {

}

.btn {

  color: #FFFFFF;

  background-color: #8db844

  }

</style>

</head>

<body>


<form class="form-signin" action="authit.php" method="POST">

  <h2 class="text-center login-title">
	<span style="font-family: 'nexaheavy'">Atom <font color="#8db844">GateWay</font> Status</span>
  </h2>

  <p>
	<input type="text" class="form-control" name="username" id="username" placeholder="Email" required autofocus />
  </p>
  <p>
	<input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
  </p>
	<p>
	  <button class="btn btn-lg btn-block" type="submit">Sign in</button>
	</p>
</form>


</body>
</html>
