<?php
	session_start();
	if(isset($_SESSION["user"])){
		header("Location: inindex.php");
	}

?>
<html>
<head>
    <meta charset="utf-8">
    <title>CONFIA</title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
</head>

    <div class="login-page">
    <div class="form">
        <!-- <form class="register-form">
        <input type="text" placeholder="name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email address"/>
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form> -->
        <form method="post" action="php/login.php" class="login-form">
            <input type="text" name="email" placeholder="email"/>
            <input type="password" name="password" placeholder="password"/>
            <button>login</button>
        </form>
    </div>
    </div>

</html>