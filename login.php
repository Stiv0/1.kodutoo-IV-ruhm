<?php

	//var_dump($_GET);
	
	//echo "<br>";
	
	//var_dump($_POST);
	
	$signupEmailError = "*";

	//Kas keegi vajutas nuppu ja on olemas?
	
	if(isset($_POST["signupEmail"])) {
			//on olemas
			//Kas e-post on t�hi
			if (empty($_POST["signupEmail"])) {
				
				//on t�hi
				$signupEmailError = "* V�li on kohustuslik";
			}
	}
		
	$signupPasswordError = "*";

	//Kas keegi vajutas nuppu ja on olemas?
	
	if(isset($_POST["signupPassword"])) {
			//on olemas
			//Kas e-post on t�hi
			if (empty($_POST["signupPassword"])) {
				
				//on t�hi
				$signupPasswordError = "* V�li on kohustuslik";
			} else {
				
				//Parool ei olnud t�hi
				
				if(strlen($_POST(["signupPassword"])) < 8 ) {
					
					$signupPasswordError = "* Parool peab olema v�hemalt 8 t�hem�rki";
					
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
