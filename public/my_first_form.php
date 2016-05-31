<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>User Login</h1>
	<form method="POST" action="my_first_form.php">
	<div>
	    <label for="username">Username</label>
	    <input placeholder="username" id="username" name="username" type="text">
	</div>
	<div>
	    <label for="password">Password</label>
	    <input placeholder="password" id="password" name="password" type="password">
	</div>
	<div>
	    <button name="button" value="login" type="submit">Login</button>
	</div>
	</form>

	<h1>Compose an email</h1>
	<form method="POST" action="my_first_form.php">
    <div>
        <label for="To">To</label>
        <input placeholder="To" id="To" name="To" type="text" autofocus>
    </div>
    <div>
        <label for="from">From</label>
        <input placeholder="from" id="from" name="from" type="text">
    </div>
    <div>
        <label for="subject">Subject</label>
        <input placeholder="subject" id="subject" name="subject" type="text" tabindex="1">
    </div>
	<div>
        <label for="body">Body</label>
        <textarea placeholder="blah" id="body" name="body" type="text" tabindex="2">what</textarea> 
    </div>
	<div>
        <button name="button" value="login" type="submit">Send</button>
    </div>
    <div>
    	<label>
    		<input type="checkbox" name="saveacopy" checked="">
    		Save a Copy?
    	</label>
    </div>
	</form>
	<h1>Multiple Choice</h1>
	<form method="POST">
		<div>
			<label for="question"></label>
			<select id="question" name="question[]" multiple>
				<option>answer1</option>
				<option>answer2</option>
				<option>answer3</option>
			</select>
		</div>
		<div>
			<input type="submit"></input>
		</div>
	</form>
	<form>
	<h1>Select Testing</h1>
		<div>
			<label for="transmission">Yes or No?: </label>
			<select id="transmission" name="transmission">
    			<option value="1">Yes</option>
    			<option value="0">No</option>
			</select>
		</div>
		<div>
			<input type="submit"></input>
		</div>	
	</form>
</body>
</html>