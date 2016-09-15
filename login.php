<?php

	//var_dump($_GET);
	
	//echo "<br>";
	
	//var_dump($_POST);
	
	$signupEmailError = "*";

	//Kas keegi vajutas nuppu ja on olemas?
	
	if(isset($_POST["signupEmail"])) {
			//on olemas
			//Kas e-post on tühi
			if (empty($_POST["signupEmail"])) {
				
				//on tühi
				$signupEmailError = "* Väli on kohustuslik";
			}
	}
		
	$signupPasswordError = "*";

	//Kas keegi vajutas nuppu ja on olemas?
	
	if(isset($_POST["signupPassword"])) {
			//on olemas
			//Kas e-post on tühi
			if (empty($_POST["signupPassword"])) {
				
				//on tühi
				$signupPasswordError = "* Väli on kohustuslik";
			} else {
				
				//Parool ei olnud tühi
				
				if(strlen($_POST(["signupPassword"])) < 8 ) {
					
					$signupPasswordError = "* Parool peab olema vähemalt 8 tähemärki";
					
				}
				
			}
	}
		
	
?>
<!DOCTYPE html>
<html>
	<head>
	
		<title>Sisselogimise leht</title>
		
	</head>
	
	<body>
	
		<h1>Logi sisse</h1>
		
		<form method="POST" >
		
			<input name="loginEmail" placeholder="E-post" type="email">
			
			<br><br>
			
			<input name="loginPassword" placeholder="Parool" type="password">
			
			<br><br>
			
			<input type="submit" value="Logi sisse">
		</form>
		
		<h1>Loo kasutaja</h1>
		
		<form method="POST" >
		
			<input name="signupEmail" placeholder="E-post" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input name="signupPassword" placeholder="Parool" type="password"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<input type="submit" value="Loo kasutaja">
		</form>
		
	</body>
</html>
